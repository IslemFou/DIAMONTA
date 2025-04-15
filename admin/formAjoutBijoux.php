<?php
require_once '../inc/functions/db.php';
require_once '../inc/functions/functions.php';
require_once '../inc/header.inc.php';

?>


<div class="container">
  <h2 class="text-center my-5">Ajout de Bijoux</h2>
  <div class="w-75 mx-auto">
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="product_name" class="form-label">Nom du produit</label>
        <input type="text" class="form-control" id="product_name">
      </div>
      <div class="mb-3">
        <label class="form-label" for="product_description">Description</label>
        <textarea class="form-control" id="product_description" cols="30" rows="5"></textarea>
      </div>
      <div class="mb-3">
        <label class="form-label" for="product_image">Image du produit</label>
        <input type="file" class="form-control" id="product_image"></input>
      </div>
      <div class="row">
        <div class="col mb-3">
          <label class="form-label" for="product_reference">Référence</label>
          <input type="number" class="form-control" id="product_reference">
        </div>
        <div class="col mb-3">
          <label class="form-label" for="product_stock">Stock</label>
          <input type="number" class="form-control" id="product_stock">
        </div>
        <div class="col mb-3">
          <label for="product_price" class="form-label">Prix</label>
          <input type="number" class="form-control" id="product_price">
        </div>
      </div>
      <div class="d-flex justify-content-center my-5">
        <button type="submit" class="btn btn-diamonta-pink w-25">Ajouter</button>
      </div>
    </form>
  </div>
</div>






<?php require_once '../inc/footer.inc.php'; ?>