<?php
require_once '../inc/functions/db.php';
require_once '../inc/functions/functions.php';
require_once '../inc/header.inc.php';

?>

<div class="container-fluid">
  <div class="row justify-content-center gap-4">
    <div class="col-sm-12 col-md-5 bg-diamonta-purple p-5 d-flex justify-content-center mt-4">
      <div class="d-flex flex-column align-items-start mt-5">
        <div class="d-flex flex-column align-items-center justify-content-center">
          <h3 class="text-center">Bague Lady Fleurale</h3>
          <p class="lead">Bague Lady Fleurale en Or rose, taille ovale, blanche</p>
          <p class="price h3 w-100 mx-auto text-center fw-light">1.900€</p>
        </div>
        <h4 class="mb-3">Matériaux</h4>
        <div class="d-flex justify-content-left gap-3 mb-5">
          <div class="material white-gold position-relative">
            <p class="position-absolute top-100 start-0 w-100 text-center">Or blanc</p>
          </div>
          <div class="material gold position-relative">
            <p class="position-absolute top-100 start-0 w-100 text-center">Or jaune</p>
          </div>
          <div class="material pink-gold position-relative">
            <p class="position-absolute top-100 start-0 w-100 text-center">Or rose</p>
          </div>
        </div>
        <h4 class="mb-3">Pierre</h4>
        <div class="d-flex justify-content-center gap-5 mb-5">
          <div class="rock d-flex flex-column align-items-center gap-2 p-4">
            <img src="<?= BASE_URL; ?>assets/media/img/diamond.svg" alt="icone diamant" class="img-fluid">
            <p class="text-center px-5 m-0">Diamant</p>
          </div>
          <div class="rock d-flex flex-column align-items-center gap-2 p-4">
            <img src="<?= BASE_URL; ?>assets/media/img/diamond.svg" alt="icone diamant" class="img-fluid">
            <p class="text-center px-5 m-0">Zirconium</p>
          </div>
        </div>
        <h4 class="mb-3">Taille</h4>
        <div class="d-flex justify-content-center gap-2 mb-5">
          <div class="size border border-diamonta-pink">
            <p class="p-3 m-0 w-100">50</p>
          </div>
          <div class="size border border-diamonta-pink">
            <p class="p-3 m-0 w-100">52</p>
          </div>
          <div class="size border border-diamonta-pink">
            <p class="p-3 m-0 w-100">55</p>
          </div>
          <div class="size border border-diamonta-pink">
            <p class="p-3 m-0 w-100">58</p>
          </div>
          <div class="size border border-diamonta-pink">
            <p class="p-3 m-0 w-100">60</p>
          </div>
        </div>
        <button class="btn btn-light w-50 mx-auto" id="addToCartBtn">Ajouter au
          Panier</button>
      </div>
    </div>
    <div
      class="col-sm-12 col-md-5 bg-diamonta-purple p-5 d-flex flex-column justify-content-center align-items-center mt-4">
      <img src="<?= BASE_URL; ?>assets/media/img/bague-w-1.svg" alt="bague en diamant" class="img-fluid mb-3"
        id="product-img">
      <div class="row mb-3">
        <div class="col-4"><img src="<?= BASE_URL; ?>assets/media/img/bague-main-1.svg" alt="bague portee"></div>
        <div class="col-4"><img src="<?= BASE_URL; ?>assets/media/img/bague-w-2.svg" alt="bague or blanc"></div>
        <div class="col-4"><img src="<?= BASE_URL; ?>assets/media/img/bague-w-2.svg" alt="bague or blanc"></div>
      </div>
      <div class="row">
        <div class="col-4"><img src="<?= BASE_URL; ?>assets/media/img/bague-main-1.svg" alt="bague portee"></div>
        <div class="col-4"><img src="<?= BASE_URL; ?>assets/media/img/bague-w-3.png" alt="bague or rose"></div>
        <div class="col-4"><img src="<?= BASE_URL; ?>assets/media/img/bague-w-2.svg" alt="bague or blanc"></div>
      </div>
    </div>
  </div>
</div>

<?php require_once '../inc/footer.inc.php'; ?>