<?php

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