<?php
$title = "Connexion";
require_once 'inc/functions.inc.php';
$info = "";

if (isset($_SESSION['user'])) {
  header("location:profile.php");
}
// var_dump($_SESSION);

if (empty($_POST)) {
  $check = true; // c'est vide
  foreach ($_POST as $key => $value) {
    if (empty(trim($value))) {
      $check = false; // n'est pas vide
    }
  }


  if (!$check) {
    $info = "Veuillez remplir tous les champs";
  }
}


?>

<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Islem FOURATI">
  <meta name="description" content="Page de connextion du site e-commerce DIAMONTA">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Prata&display=swap"
    rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" href="<?= BASE_URL; ?>assets/css/style.css">
  <title><?= $title; ?></title>
</head>

<body class="py-4 bg-diamonta-blue h-100" data-bs-theme="dark">
  <main class="d-flex flex-column justify-content-center align-items-center form-signin mx-auto h-100 w-75">
    <form action="" method="post"
      class="bg-diamonta-blue text-diamonta-pink p-5 rounded-3 text-dark col-5 border border-light border-2">
      <h1 class="h3 mb-3 fw-normal text-center">Connectez-vous</h1>

      <div class="mb-3">
        <label for="email" class="form-label">Adresse e-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="passwowrd" class="form-label"">Mot de passe</label>
        <input type=" password" class="form-control" id="password" placeholder="Password">
      </div>

      <div class="row">
        <button class="btn btn-diamonta-pink py-2 w-50 col-md-6 mx-auto" type="submit">Se connecter</button>
      </div>
    </form>
    <p class="mt-2 text-light text-center">&copy; DIAMONTA 2025</p>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
</body>

</html>