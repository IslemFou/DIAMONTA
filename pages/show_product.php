<?php
require_once '../inc/functions/db.php';
require_once '../inc/functions/functions.php';
require_once '../inc/header.inc.php';

?>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-md-6">
      <div class="d-flex flex-column align-items-center mt-5">
        <h3>Bague Diamant</h3>
        <p class="lead">Bague Lady Fleurale en Or rose, taille ovale, blanche</p>
        <p class="price">2000€</p>
        <h4>Matériaux</h4>
        <div class="d-flex justify-content-left gap-3 mb-5">
          <div class="material white-gold position-relative">
            <p class="position-absolute top-100 start-0 ">Or blanc</p>
          </div>
          <div class="material gold position-relative">
            <p class="position-absolute top-100 start-0 ">Or jaune</p>
          </div>
          <div class="material pink-gold position-relative">
            <p class="position-absolute top-100 start-0 ">Or rose</p>
          </div>
        </div>
        <h4>Pierre</h4>
        <div class="d-flex justify-content-center">
          <div class="rock">
            <img src="<?= BASE_URL; ?>assets/media/img/diamond.svg" alt="icone diamant" class="img-fluid">
            <p>Diamant</p>
          </div>
          <div class="rock">
            <img src="<?= BASE_URL; ?>assets/media/img/diamond.svg" alt="icone diamant" class="img-fluid">
            <p>Oxyde de zirconium</p>
          </div>
        </div>
        <ul>
          <li>Taille 1</li>
          <li>Taille 2</li>
          <li>Taille 3</li>
          <li>Taille 4</li>
          <li>Taille 5</li>
        </ul>
        <button>Ajouter au Panier</button>
      </div>
    </div>
    <div class="col-sm-12 col-md-6 mt-5">
      <img src="<?= BASE_URL; ?>assets/media/img/bague-2.png" alt="bague en diamant" class="img-fluid" id="product-img">
    </div>
  </div>
</div>

<?php require_once '../inc/footer.inc.php'; ?>