<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Prata&display=swap"
    rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?= BASE_URL; ?>assets/css/style.css">
  <title>Diamonta</title>
</head>

<body>

  <header
    class=" container-fluid d-flex flex-wrap align-items-center justify-content-center justify-content-md-around py-3 mb-4 border-bottom">
    <div class="col-md-auto mb-2 mb-md-0">
      <a href="<?= BASE_URL; ?>index.php" class="h4 text-uppercase text-decoration-none">Diamonta</a>
    </div>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="#" class="nav-link px-2 link-secondary active">Accueil</a></li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle px-2 link-secondary" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" id="highJewelryDropdownMenuLink">
          Haute Joaillerie
        </a>
        <div class="dropdown-menu" aria-labelledby="highJewelryDropdownMenuLink">
          <a class="dropdown-item" href="#">Ensemble en Diamant</a>
          <a class="dropdown-item" href="#">Héritage de la Reine</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle px-2 link-secondary" role="button" data-toggle="dropdown"
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
        <a href="#" class="nav-link dropdown-toggle px-2 link-secondary" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" id="mariageCelebrationDropdownMenuLink">
          Mariages & Célébrations
        </a>
        <div class="dropdown-menu" aria-labelledby="mariageCelebrationDropdownMenuLink">
          <a class="dropdown-item" href="#">Le classique</a>
          <a class="dropdown-item" href="#">Le baroque</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle px-2 link-secondary" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" id="watchmakingDropdownMenuLink">
          Horlogerie
        </a>
        <div class="dropdown-menu" aria-labelledby="watchmakingDropdownMenuLink">
          <a class="dropdown-item" href="#">Montres classiques</a>
          <a class="dropdown-item" href="#">Accessoires montre</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle px-2 link-secondary" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" id="knowHowDropdownMenuLink">
          Savoir-Faire
        </a>
        <div class="dropdown-menu" aria-labelledby="knowHowDropdownMenuLink">
          <a class="dropdown-item" href="#">Notre Expertise</a>
          <a class="dropdown-item" href="#">Diamant</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle px-2 link-secondary" role="button" data-toggle="dropdown"
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

    <div class="col-md-auto text-end">
      <button type="button" class="btn btn-outline-primary me-2">Connexion</button>
      <button type="button" class="btn btn-primary">Inscription</button>
    </div>
  </header>