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

// Add product
function addProduct($name, $price, $reference, $description, $stock)
{
  try {
    $pdo = dbConnection();
    $sql = "INSERT INTO produits (nom, prix, reference, description, stock) VALUES (:nom, :prix, :reference, :description, :stock)";
    $request = $pdo->prepare($sql);
    $request->execute([
      'nom' => $name,
      'prix' => $price,
      'reference' => $reference,
      'description' => $description,
      'stock' => $stock
    ]);
  } catch (\Throwable $th) {
    throw $th;
  }
}

// Update product
function updateProduct($id, $name, $price, $reference, $description, $stock)
{
  try {
    $pdo = dbConnection();
    $sql = "UPDATE produits SET nom = :nom, prix = :prix, reference = :reference, description = :description, stock = :stock WHERE id = :id";
    $request = $pdo->prepare($sql);
    $request->execute([
      'nom' => $name,
      'prix' => $price,
      'reference' => $reference,
      'description' => $description,
      'stock' => $stock,
      'id' => $id
    ]);
  } catch (\Throwable $th) {
    throw $th;
  }
}

// Fetch product
function getProductById($id)
{
  try {
    $pdo = dbConnection();
    $sql = "SELECT * FROM produits WHERE id = :id";
    $request = $pdo->prepare($sql);
    $request->execute([
      'id' => $id
    ]);
    $result = $request->fetch();
    return $result;
  } catch (\Throwable $th) {
    throw $th;
  }
}

//)




