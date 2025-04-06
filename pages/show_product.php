<?php
require_once '../inc/functions/db.php';
require_once '../inc/functions/functions.php';
require_once '../inc/header.inc.php';

?>

<h2 class="text-center my-5">Bague Lady Fleurale</h2>
<div class="container p-0" id="product-container">
  <div class="row justify-content-center gap-4" ">
    <div class=" col-sm-12 col-md-5 bg-diamonta-purple p-3 d-flex justify-content-center">
    <div class="d-flex flex-column align-items-start">
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
      <button class="btn btn-light w-50 mx-auto mb-3 addToCartBtn">Ajouter au
        Panier</button>
    </div>
  </div>
  <div class="col-sm-12 col-md-5 bg-diamonta-purple p-3 d-flex flex-column justify-content-center align-items-center">
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

<section class="container my-5">
  <h3 class="text-center mb-5">Détails du produit</h3>
  <div class="accordion accordion-flush" id="accordionDiamonta">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed border-bottom border-diamonta-pink" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          Détails du produit
          <i class="bi bi-plus position-absolute top-50 start-100 translate-middle"></i>
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionDiamonta">
        <div class="accordion-body">
          <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin
          adds the appropriate classes that we use to style each element. These classes control the overall appearance,
          as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or
          overriding our default variables. It's also worth noting that just about any HTML can go within the
          <code>.accordion-body</code>, though the transition does limit overflow.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed border-bottom border-diamonta-pink position-relative" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Guide des tailles
          <i class="bi bi-plus position-absolute top-50 start-100 translate-middle"></i>
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionDiamonta">
        <div class="accordion-body">
          <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin
          adds the appropriate classes that we use to style each element. These classes control the overall appearance,
          as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or
          overriding our default variables. It's also worth noting that just about any HTML can go within the
          <code>.accordion-body</code>, though the transition does limit overflow.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed border-bottom border-diamonta-pink" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Certifications
          <i class="bi bi-plus position-absolute top-50 start-100 translate-middle"></i>
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionDiamonta">
        <div class="accordion-body">
          <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin
          adds the appropriate classes that we use to style each element. These classes control the overall appearance,
          as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or
          overriding our default variables. It's also worth noting that just about any HTML can go within the
          <code>.accordion-body</code>, though the transition does limit overflow.
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container my-5 position-relative">
  <h3 class="text-center mb-5">Compléter le look</h3>
  <button class="carousel-control-prev position-absolute top-50" type="button" data-bs-target="#carouselExampleCaptions"
    data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active d-flex justify-content-center align-items-center gap-5">
        <div class="d-flex flex-column align-items-center justify-content-center bg-white gap-2 p-3">
          <img src="<?= BASE_URL; ?>assets/media/img/boucles-w-1.png" class="d-block w-100"
            alt="boucles d'oreilles perles">
          <h5 class="text-dark">First slide label</h5>
          <p class="text-dark">Some representative placeholder content for the first slide.</p>
          <button class="btn bg-diamonta-pink text-diamonta-blue">Ajouter au panier</button>
        </div>

        <div class="d-flex flex-column align-items-center justify-content-center bg-white gap-2 p-3">
          <img src="<?= BASE_URL; ?>assets/media/img/boucles-w-1.png" class="d-block w-100"
            alt="boucles d'oreilles perles">
          <h5 class="text-dark">First slide label</h5>
          <p class="text-dark">Some representative placeholder content for the first slide.</p>
          <button class="btn bg-diamonta-pink text-diamonta-blue">Ajouter au panier</button>
        </div>

        <div class="d-flex flex-column align-items-center justify-content-center bg-white gap-2 p-3">
          <img src="<?= BASE_URL; ?>assets/media/img/boucles-w-1.png" class="d-block w-100"
            alt="boucles d'oreilles perles">
          <h5 class="text-dark">First slide label</h5>
          <p class="text-dark">Some representative placeholder content for the first slide.</p>
          <button class="btn bg-diamonta-pink text-diamonta-blue">Ajouter au panier</button>
        </div>
      </div>
    </div>

  </div>
  <button class="carousel-control-next position-absolute top-50" type="button" data-bs-target="#carouselExampleCaptions"
    data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</section>

<?php require_once '../inc/footer.inc.php'; ?>