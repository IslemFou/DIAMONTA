<?php
require_once '../inc/functions/functions.php';
require_once '../inc/header.inc.php';

?>

<h2 class="text-center my-5">Votre commande</h2>

<div class="container mb-5 bg-diamonta-purple px-0 d-flex flex-column" id="panier-container">
  <div class="d-flex gap-5 border-bottom border-diamonta-pink">
    <img src="<?= BASE_URL; ?>assets/media/img/bague-w-1.svg" alt="bague or rose certie de diamants"
      class="img-fluid w-25">
    <div class="d-flex flex-column justify-content-center flex-grow-1 gap-5">
      <div class="d-flex justify-content-between">
        <h3>Bague Lady Fleurale</h3>
        <p class="h3 me-5">1.900€</p>
      </div>
      <div class="d-flex flex-column">
        <p><b>Matériau : </b>Or rose</p>
        <p><b>Pierre : </b>Diamant 4 carats</p>
        <p><b>Taille : </b>52</p>
      </div>
      <div class="d-flex justify-content-between">
        <div>
          <div class="d-flex justify-content-center align-items-center gap-2">
            <span>Quantité : 1</span>
            <a href="" class="text-decoration-none text-light fs-4"><i class="bi bi-plus bg-diamonta-pink"></i></a>
            <a href="" class="text-decoration-none text-light fs-4"><i class="bi bi-dash bg-diamonta-pink"></i></a>
          </div>
        </div>
        <div class="d-flex gap-3 me-5">
          <a href="#" class="text-light">Modifier</a>
          <a href="#" class="text-light">Supprimer</a>
        </div>
      </div>
    </div>
  </div>

  <div class="d-flex gap-5">
    <img src="<?= BASE_URL; ?>assets/media/img/boulces-w-2.svg" alt="bague or rose certie de diamants"
      class="img-fluid w-25">
    <div class="d-flex flex-column justify-content-center flex-grow-1 gap-5">
      <div class="d-flex justify-content-between">
        <h3>Boucles d'oreilles Fleurale</h3>
        <p class="h3 me-5">750€</p>
      </div>
      <div class="d-flex flex-column">
        <p><b>Matériau : </b>Or rose</p>
        <p><b>Pierre : </b>Diamant 4 carats</p>
        <p><b>Taille : </b>52</p>
      </div>
      <div class="d-flex justify-content-between">
        <div>
          <div class="d-flex justify-content-center align-items-center gap-2">
            <span>Quantité : 1</span>
            <a href="" class="text-decoration-none text-light fs-4"><i class="bi bi-plus bg-diamonta-pink"></i></a>
            <a href="" class="text-decoration-none text-light fs-4"><i class="bi bi-dash bg-diamonta-pink"></i></a>
          </div>
        </div>
        <div class="d-flex gap-3 me-5">
          <a href="#" class="text-light">Modifier</a>
          <a href="#" class="text-light">Supprimer</a>
        </div>
      </div>
    </div>
  </div>
</div>

<section id="cost"
  class="container d-flex align-items-center justify-content-center bg-diamonta-light-blue text-diamonta-blue p-5 mt-5 mb-5">
  <div class="d-flex flex-column w-100">
    <div class="d-flex justify-content-between">
      <h5 class="fw-bold">Sous-total</h5>
      <p class="fw-bold h3">2650€ TTC</p>
    </div>
    <div class="d-flex justify-content-between">
      <p class="text-decoration-underline">Frais de livraison</p>
      <p class="fw-bold h3">0€ TTC</p>
    </div>
    <hr class="border-diamonta-pink">
    <div class="d-flex justify-content-between">
      <h5 class="fw-bold">Total estimé</h5>
      <p class="fw-bold h3">2650€ TTC</p>
    </div>
    <p>livraison standard et retours offerts</p>
    <button type="submit" class="btn btn-diamonta-pink addToCartBtn w-25 mx-auto fw-bold">Finaliser ma commande</button>
  </div>
</section>



<?php require_once '../inc/footer.inc.php'; ?>