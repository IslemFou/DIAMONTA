<?php 
$title = "Connexion";
require_once 'inc/functions.inc.php';
$info = "";

if (isset($_SESSION['user'])) {
    header("location:profile.php");
}
// var_dump($_SESSION);

if (empty($_POST))
{
    $verif = true; // c'est vide
    foreach ($_POST as $key => $value) {
        if (empty(trim($value))) {
            $verif = false; // n'est pas vide
        }
    }
}

if (!$verif) {
    $info = "Veuillez remplir tous les champs";
}



?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Islem FOURATI">
    <meta name="description" content="Page de connextion du site e-commerce DIAMONTA">
    <!-- CSS -->
  <link rel="stylesheet" href="<?= BASE_URL; ?>assets/css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Se connecter à DIAMONTA</title>
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">
<main class="container form-signin w-50 mx-auto">
  <form action="" method="post">
    <h1 class="h3 mb-3 fw-normal">Connectez-vous</h1>

    <div class="form-floating">
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
        <label for="">Adresse e-mail</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Mot de passe</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Se souvenir de moi
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Se connecter</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; DIAMONTA 2025</p>
  </form>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>
