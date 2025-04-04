<?php
require_once '../inc/functions/db.php';
require_once '../inc/functions/functions.php';
require_once '../inc/header.inc.php';

?>

<div class="container-fluid">
  <div class="row">
    // Section produit
    <div class="col-sm-12 col-md-7">
      <img src="<?= BASE_URL; ?>assets/media/img/bague-2.png" alt="bague en diamant" class="img-fluid" id="product-img">
    </div>
    // Section ajout au panier
    <div class="col-sm-12 col-md-5">
      <div class="d-flex flex-column">
        <h3>Bague Diamant</h3>
        <p>2000€</p>
        <p>Bague en argent certie de diamants</p>
        <h4>Metal : Platine, Or, Argent, Bronze</h4>
        <p>Selectionnez la taille</p>
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
  </div>
</div>

<?php require_once '../inc/footer.inc.php'; ?>