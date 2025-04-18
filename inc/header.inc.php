<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Prata&display=swap"
    rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?= BASE_URL; ?>assets/css/style.css">
  <title>Diamonta</title>
</head>

<body>
  <main>
    <!-- <div
      class=" bg-diamonta-pink d-flex justify-content-center align-items-center position-relative alert rounded-0 p-3">
      <p class="text-diamonta-blue text-uppercase text-center m-0">Réalisez vos achats sur notre
        e-boutique et
        bénéficiez de la livraison express offerte</p>
      <button type="button" class="btn-close position-absolute top-50 end-0 translate-middle" data-bs-dismiss="alert"
        aria-label="Close"></button>
    </div> -->
    <header class="container-fluid d-flex flex-column py-3 border-diamonta-pink" data-bs-theme="dark">
      <div class="row w-100 d-flex justify-content-center align-items-center">
        <!-- Logo -->
        <div class="col-10 d-flex justify-content-center ">
          <a href="<?= BASE_URL; ?>index.php" class="h1 text-uppercase text-decoration-none" id="logo">Diamonta</a>
        </div>
        <!-- Cart and Person Icon -->
        <div class="col-2 d-flex justify-content-end align-items-center gap-2">
          <a href="#" type="button" class="btn btn-light px-2 rounded-0" id="rdv">Prendre RDV</a>
          <a href="<?= BASE_URL; ?>store/cart.php" class="nav-link px-2 link-light">
            <i class="bi bi-bag-heart-fill fill-diamonta-pink fs-3"></i>
          </a>

          <?php if (isset($_GET['action']) && $_GET['action'] === 'logout') {
            session_destroy();
            redirect('index.php');
          }

          if (isset($_SESSION['user'])): ?>
            <a href="?action=logout" class="nav-link px-2 link-light">
              <button type="button" class="btn btn-diamonta-pink">Déconnexion</button>
            </a>
          <?php else: ?>
            <a href="<?= BASE_URL; ?>login.php" type="button" class="nav-link link-light"><i
                class="bi bi-person fill-diamonta-pink fs-2"></i></a>
          <?php endif; ?>
        </div>
      </div>

      <ul class="d-none nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="<?= BASE_URL; ?>index.php" class="nav-link px-2 link-light active">Accueil</a></li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle link-light" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" id="highJewelryDropdownMenuLink">
            Haute Joaillerie
          </a>
          <div class="dropdown-menu" aria-labelledby="highJewelryDropdownMenuLink">
            <a class="dropdown-item" href="#">Ensemble en Diamant</a>
            <a class="dropdown-item" href="#">Héritage de la Reine</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle px-2 link-light" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" id="jewelryDropdownMenuLink">
            Joaillerie
          </a>
          <div class="dropdown-menu" aria-labelledby="jewelryDropdownMenuLink">
            <a class="dropdown-item" href="#">Colliers</a>
            <a class="dropdown-item" href="#">Bracelets</a>
            <a class="dropdown-item" href="#">Bagues</a>
            <a class="dropdown-item" href="#">Boucles d'oreilles</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle px-2 link-light" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" id="mariageCelebrationDropdownMenuLink">
            Mariages & Célébrations
          </a>
          <div class="dropdown-menu" aria-labelledby="mariageCelebrationDropdownMenuLink">
            <a class="dropdown-item" href="#">Le classique</a>
            <a class="dropdown-item" href="#">Le baroque</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle px-2 link-light" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" id="watchmakingDropdownMenuLink">
            Horlogerie
          </a>
          <div class="dropdown-menu" aria-labelledby="watchmakingDropdownMenuLink">
            <a class="dropdown-item" href="#">Montres classiques</a>
            <a class="dropdown-item" href="#">Accessoires montre</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle px-2 link-light" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" id="knowHowDropdownMenuLink">
            Savoir-Faire
          </a>
          <div class="dropdown-menu" aria-labelledby="knowHowDropdownMenuLink">
            <a class="dropdown-item" href="#">Notre Expertise</a>
            <a class="dropdown-item" href="#">Diamant</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle px-2 link-light" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" id="servicesDropdownMenuLink">
            Services
          </a>
          <div class="dropdown-menu" aria-labelledby="servicesDropdownMenuLink">
            <a class="dropdown-item" href="#">Service à domicile</a>
            <a class="dropdown-item" href="#">Service après-vente</a>
            <a class="dropdown-item" href="#">Réparation et entretien</a>
          </div>
        </li>
      </ul>
      <div class="modal modal-aside loginaside-modal js-login-modal" id="loginModal" tabindex="-1"
        aria-labelledby="loginModalLabel" aria-model="true" role="dialog">
        <div class="modal-dialog js-aside-login-modal-content" role="document" data-url="<?= BASE_URL; ?>login.php">
          <!-- <div class="modal-content">
            <div class="content h-100">
              <div class="row h-100 w-100 m-0">
                <div class="col-12 col-lg-6 p-0 immersive-modal-left bottom-on-small">
                  <div class="modal-image-background">

                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
    </header>