<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?= BASE_URL; ?>assets/media/img/favicon.ico">
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
  <main data-bs-theme="dark">
    <nav class="py-3 border-bottom border-diamonta-pink">
      <div class="container-fluid d-flex flex-wrap justify-content-between align-items-center">
        <button class="navbar-toggler px-5" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDiamonta"
          aria-controls="navbarDiamonta" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="<?= BASE_URL; ?>index.php" class="text-uppercase text-decoration-none navbar-brand ms-5"
          id="logo">Diamonta</a>
        <!-- Cart and Person Icon -->
        <div class="d-flex justify-content-end align-items-center gap-2">
          <a href="#" type="button" class="btn btn-light px-2 rounded-0" id="rdv">Prendre RDV</a>
          <a href="<?= BASE_URL; ?>store/cart.php" class="nav-link px-2 link-light">
            <i class="bi bi-bag-heart-fill fill-diamonta-pink fs-3"></i>
          </a>
          <?php if (isset($_GET['action']) && $_GET['action'] === 'logout') {
            unset($_SESSION['user']);
            redirect('index.php');
          }
          if (isset($_SESSION['user'])): ?>
            <a href="?action=logout" class="nav-link px-2 link-light">
              <button type="submit" class="btn btn-diamonta-pink">Déconnexion</button>
            </a>
          <?php else: ?>
            <a href="<?= BASE_URL; ?>login.php" type="button" class="nav-link link-light"><i
                class="bi bi-person fill-diamonta-pink fs-2"></i></a>
          <?php endif; ?>
        </div>
        <div class="navbar-collapse collapse" id="navbarDiamonta">
          <ul class="navbar-nav me-auto mb-2 d-flex flex-row justify-content-center align-items-center gap-2">
            <li class="nav-item"><a href="<?= BASE_URL; ?>index.php" class="nav-link px-2 link-light active">Accueil</a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle link-light" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" id="highJewelryDropdownMenuLink">
                Haute Joaillerie
              </a>
              <ul class="dropdown-menu" aria-labelledby="highJewelryDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Ensemble en Diamant</a></li>
                <li><a class="dropdown-item" href="#">Héritage de la Reine</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link dropdown-toggle px-2 link-light" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" id="jewelryDropdownMenuLink">
                Joaillerie
              </a>
              <ul class="dropdown-menu" aria-labelledby="jewelryDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Colliers</a></li>
                <li><a class="dropdown-item" href="#">Bracelets</a></li>
                <li><a class="dropdown-item" href="#">Bagues</a></li>
                <li><a class="dropdown-item" href="#">Boucles d'oreilles</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link dropdown-toggle px-2 link-light" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" id="mariageCelebrationDropdownMenuLink">
                Mariages & Célébrations
              </a>
              <ul class="dropdown-menu" aria-labelledby="mariageCelebrationDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Le classique</a></li>
                <li><a class="dropdown-item" href="#">Le baroque</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link dropdown-toggle px-2 link-light" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" id="watchmakingDropdownMenuLink">
                Horlogerie
              </a>
              <ul class="dropdown-menu" aria-labelledby="watchmakingDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Montres classiques</a></li>
                <li><a class="dropdown-item" href="#">Accessoires montre</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link dropdown-toggle px-2 link-light" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" id="knowHowDropdownMenuLink">
                Savoir-Faire
              </a>
              <ul class="dropdown-menu" aria-labelledby="knowHowDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Notre Expertise</a></li>
                <li><a class="dropdown-item" href="#">Diamant</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link dropdown-toggle px-2 link-light" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" id="servicesDropdownMenuLink">
                Services
              </a>
              <ul class="dropdown-menu" aria-labelledby="servicesDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Service à domicile</a></li>
                <li><a class="dropdown-item" href="#">Service après-vente</a></li>
                <li><a class="dropdown-item" href="#">Réparation et entretien</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>