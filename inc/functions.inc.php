<?php
if (session_status() == PHP_SESSION_NONE) {
  ob_start(); // ob_start() est un outil essentiel pour la gestion du contenu et des en-têtes en PHP. Dans ton cas, il permet d'utiliser header() sans contrainte, de gérer tes redirections et d'afficher les erreurs ou les messages de confirmation aux endroits souhaités. Il faut toujours utilisé cette technique si on utilise des redirections et des headers.
  session_start();
}
define('BASE_URL', "http://localhost/DIAMONTA/");
function message(string $text, string $class): string
{
  return
    '<div class="w-100 mx-auto d-flex align-items-around alert alert-' . $class . '">' .
    '<span class="mx-auto">' . $text . '</span>' .
    '<button type="button" class="btn-close align-self-center position-absolute top-50% start-90%" data-bs-dismiss="alert"></button>' .
    '</div>';
}

function redirect(string $url)
{
  header("location: $url");
  exit;
}

// Db connection
define('DB_HOST', 'localhost');
define('DB_NAME', 'diamonta');
define('DB_USER', 'root');
define('DB_PASS', '');

function dbConnection(): object
{
  $DSN = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8';
  try {
    $PDO = new PDO($DSN, DB_USER, DB_PASS);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
  }
  return $PDO;
}

// Check if user provided email already exists in the database
function checkDbEmail(string $email): mixed
{
  $PDO = dbConnection();
  $sql = 'SELECT email, mot_de_passe from users WHERE email = :email';
  $request = $PDO->prepare($sql);
  $request->execute([':email' => $email]);
  $result = $request->fetch();
  return $result;
}

// Add user into the database
function addUser(string $nom, string $prenom, string $email, string $mot_de_passe, string $adresse, string $telephone, string $zip_code, string $ville, string $pays): void
{
  $data =
    [
      'nom' => $nom,
      'prenom' => $prenom,
      'email' => $email,
      'mot_de_passe' => $mot_de_passe,
      'adresse' => $adresse,
      'telephone' => $telephone,
      'zip_code' => $zip_code,
      'ville' => $ville,
      'pays' => $pays,
    ];

  foreach ($data as $key => $value) {
    $data[$key] = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
  }

  $PDO = dbConnection();
  $sql = 'INSERT INTO users (nom, prenom, email, mot_de_passe, adresse, telephone, zip_code, ville, pays) VALUES (:nom, :prenom, :email, :mot_de_passe, :adresse, :telephone, :zip_code, :ville, :pays)';

  $request = $PDO->prepare($sql);
  $request->execute($data);
}
