<?php
require_once 'inc/functions/db.php';
require_once 'inc/functions/functions.php';
require_once 'inc/header.inc.php';
?>

<div class="text-center mb-5 position-relative" id="hero">
  <video autoplay muted loop id="hero-video">
    <source src="./assets/media/video/jewelry_store.mp4" type="video/mp4">
    Votre navigateur ne gère pas la video
  </video>
  <div
    class="position-absolute start-50 translate-middle d-flex flex-column col-md-12 justify-content-center align-items-center">
    <h2 class="h2 text-light text-capitalize lh-base">Avec tout notre amour, depuis 1837</h2>
    <a href="#" class="text-diamonta-pink p-1 text-decoration-none border-bottom border-light">Découvrir</a>
  </div>

</div>

<div class=" d-flex justify-content-evenly align-items-center my-5 py-5">

  <div class="col-md-4 d-flex justify-content-center align-items-center">
    <div class="d-flex flex-column align-items-center text-center gap-5 position-relative">
      <img src="<?= BASE_URL; ?>assets/media/img/bague-2.png" class="d-block w-50"
        alt="bague en or blanc certie de diamants">
      <div class="d-none d-md-block">
        <h5 class="h3 lh-base fw-bold text-capitalize mb-3">Bague lady fleurale</h5>
        <p class="fw-light">Or blanc</p>
        <p class="fw-light">2000 €</p>
      </div>

      <a href="pages/show_product.php"
        class="text-diamonta-pink p-1 mt-5 text-decoration-none border-bottom border-light text-center text-uppercase">Plus
        de
        modèles</a>
    </div>
  </div>

  <div class="col-md-4">
    <img src="<?= BASE_URL; ?>assets/media/img/woman-2.png" class="img-fluid"
      alt="Femme allongée sur un lit, vue du dessus, tête en bas, avec boucle d'oreille visible sur son lobe gauche">
  </div>

</div>



<div class="container-fluid d-flex" id="diamondBand">
  <div class="col-md-3 d-flex flex-column justify-content-between align-items-center gap-3">
    <img src="<?= BASE_URL; ?>assets/media/img/bague-1.png" class="img-fluid" alt="...">
    <h5 class="h5 lh-base fw-bold">Bague Diamant</h5>
    <p class="fw-light">Or blanc certie de diamants</p>
  </div>

  <div class="col-md-3 d-flex flex-column justify-content-center align-items-center gap-3">
    <img src="<?= BASE_URL; ?>assets/media/img/bracelet-1.png" class="img-fluid" alt="...">
    <h5 class="h5 lh-base fw-bold">Bracelet Diamant</h5>
    <p class="fw-light">Or blanc certie de diamants</p>
  </div>

  <div class="col-md-3 d-flex flex-column justify-content-center align-items-center gap-3">
    <img src="<?= BASE_URL; ?>assets/media/img/bagues-1.png." class="img-fluid" alt="...">
    <h5 class="h5 lh-base fw-bold">Bagues Diamant</h5>
    <p class="fw-light">Or blanc certies de diamants</p>
  </div>

  <div class="col-md-3 d-flex flex-column justify-content-center align-items-center gap-3">
    <img src="<?= BASE_URL; ?>assets/media/img/gourmette-1.png" class="img-fluid" alt="...">
    <h5 class="h5 lh-base fw-bold">Gourmette Diamant</h5>
    <p class="fw-light">Or blanc certie de diamants</p>
  </div>
</div>

<div class="container text-center my-5 py-5" id="discover">
  <a href="#" type="button" class="btn btn-outline-diamonta-pink w-auto mb-5">Découvrir</a>
  <div class="row justify-content-center align-items-center mb-5 gap-5">
    <img src="<?= BASE_URL; ?>assets/media/img/woman-1.png" class="img-fluid w-50" alt="">
    <img src="<?= BASE_URL; ?>assets/media/img/collier-1.png" class="img-fluid w-50" alt="">
  </div>
  <a href="#"
    class="text-diamonta-pink p-1 mt-5 text-decoration-none border-bottom border-light text-center text-uppercase">Accéder
    au
    catalogue des colliers</a>
</div>

<div class="container-fluid my-5 py-5" id="engagement">
  <div class="d-flex justify-content-center align-items-center">
    <div class="col-md-6">
      <img src="<?= BASE_URL; ?>assets/media/img/fiancailles-1.png" class="img-fluid" alt="">
    </div>
    <div class="col-md-6 d-flex flex-column justify-content-center align-items-center gap-3">
      <h3 class="h3">Sélection fiançailles</h3>
      <p class="fw-lighter text-center w-75">Les bagues de fiançailles DIAMONTA & Co. qui font la renommée de la Maison
        depuis plus de
        200 ans, associent les plus beaux diamants du monde à un savoir-faire inégalé</p>
      <a href="#"
        class=" text-diamonta-pink p-1 mt-5 text-decoration-none border-bottom border-light text-center text-uppercase">Accéder
        au
        catalogue</a>
    </div>
  </div>
</div>

<div id="experience" class="container-fluid my-5 py-5">
  <div class="row">
    <h3 class="h3 text-center mb-5 py-3">Expérience DIAMONTA</h3>
    <div class="col-md-4 text-center d-flex flex-column justify-content-center align-items-center gap-3">
      <h4>Service de personnalisation</h4>
      <p class="fw-lighter">Personnalisez nos créations DIAMONTA en y ajoutant votre nom, vos initiales, une date
        importante ou un motif
        unique.</p>
      <a href="#" class=" text-diamonta-pink p-1 text-decoration-none border-bottom border-light text-center fs-6">En
        savoir plus</a>
    </div>
    <div class="col-md-4 text-center d-flex flex-column justify-content-center align-items-center gap-3">
      <h4 class="h4">Prenez rendez-vous</h4>
      <p class="fw-lighter">Nous sommes à votre service pour vos rendez-vous en boutique ou en ligne.</p>
      <a href="#"
        class=" text-diamonta-pink p-1 text-decoration-none border-bottom border-light text-center fs-6">Prendre
        rendez-vous</a>
    </div>
    <div class="col-md-4 text-center d-flex flex-column justify-content-center align-items-center gap-3">
      <h4>Livraison et Retours</h4>
      <p class="fw-lighter">Livraison et retours offerts sur toutes les commandes.</p>
      <a href="#" class=" text-diamonta-pink p-1 text-decoration-none border-bottom border-light text-center fs-6">En
        savoir plus</a>
    </div>

  </div>
</div>

<div class="container-fluid my-5 py-5">
  <div class="row">
    <div class="col-md-3 d-flex justify-content-center align-items-center"><img
        src="<?= BASE_URL; ?>assets/media/img/stars-left.png" class="img-fluid" alt="icône étoiles"></div>
    <div class="col-md-6">
      <h4 class="h4 text-center">Newsletter</h4>
      <p class="fw-lighter text-center">Inscrivez-vous à la newsletter et découvrez l'univers enchanteur de la Maison,
        ses
        créations, son patrimoine et son savoir-faire.</p>
      <form action="" method="get">
        <div class="d-flex flex-column gap-3">
          <div class="row mb-3 d-flex justify-content-center align-items-center">
            <label for="email" class="col-sm-2 col-form-label">Adresse e-mail</label>
            <input type="email" class=" col-sm-10 form-control-sm w-50" id="email" placeholder="nom@example.fr">

          </div>
          <button type="submit" class="btn btn-outline-diamonta-pink col-sm-2 align-self-center">S'abonner</button>
        </div>
      </form>
    </div>
    <div class="col-md-3 d-flex justify-content-center align-items-center"><img
        src="<?= BASE_URL; ?>assets/media/img/stars-right.png" class="img-fluid" alt="icône étoiles"></div>
  </div>
</div>

<div class="container my-5 py-5">
  <hr class="my-5 text-btn-diamonta-pink">
  <h4 class="h4 text-center text-uppercase">Diamonta & Co.</h4>
</div>





<?php require_once 'inc/footer.inc.php'; ?>