<?php
require_once '../inc/functions/db.php';
require_once '../inc/functions/functions.php';

$info = '';
$buttonText = 'Ajouter';

/*
// Initialisation des variables
$id = '';
$name = '';
$description = '';
$reference = '';
$stock = '';
$price = '';

// Affectation d'une image par défaut si aucune image n'est fournie
$image = 'assets/media/img/default.jpg';

// Verification si on est en mode modification
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $buttonText = 'Modifier';
  $product = getProductById($id);

  if ($product) {
    // Si le produit existe dans la base de données, on pré-rempli les champs du formulaire
    $name = $product['nom'];
    $description = $product['description'];
    $reference = $product['reference'];
    $stock = $product['stock'];
    $price = $product['prix'];
    $image = $product['image'];
  }
}

// Soumission du formulaire d'ajout ou de modification d'un produit
if (!empty($_POST)) {
  // Récupération des données du formulaire
  $name = htmlspecialchars(trim($_POST['product_name']));
  $description = htmlspecialchars(trim($_POST['product_description']));
  $reference = htmlspecialchars(trim($_POST['product_reference']));
  $stock = htmlspecialchars(trim($_POST['product_stock']));
  $price = htmlspecialchars(trim($_POST['product_price']));


  // Gestion de l'envoi de l'image
  $uploadDir = __DIR__ . 'assets/media/img/';
  if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] == 0) {
    $fileInfo = pathinfo($_FILES['product_image']['name']);
    $fileExt = strtolower($fileInfo['extention']);
    $fileName = uniqid('jewel_') . '.' . $fileExt;
    $uploadFile = $uploadDir . $fileName;

    // Verifications de l'extension de l'image
    $allowedTypes = ['jpeg', 'jpg', 'png', 'webp'];
    if (in_array($fileExt, $allowedTypes)) {
      if (move_uploaded_file($_FILES['image']['name'], $uploadFile)) {
        $image = 'assets/media/img' . $fileName;
      } else {
        $info .= message('Erreur lors de l\'envoi de l\'image', 'danger');
      }
    } else {
      $info .= message('Type d\'image non autorisé ! Types autorisés : jpeg, jpg, png, webp', 'danger');
    }
  } else if (isset($_POST['old_image']) && !empty($_POST['old_image'])) {
    $image = $_POST['old_image'];
  }

  $check = true;
  foreach ($_POST as $key => $value) {
    if (empty($value) && $key !== 'id' && $key !== 'old_image') {
      $check = false;
    }
  }

  if ($check == false) {
    $info .= message("Veuillez remplir tous les champs", "danger");
  } else {
    // Verification du champ nom
    if (!isset($_POST['product_name']) || empty($_POST['product_name'])) {
      $info .= message("Veuillez renseigner le nom du produit", "danger");
    }

    // Verification du champ description
    if (!isset($_POST['product_description']) || empty($_POST['product_description'])) {
      $info .= message("Veuillez renseigner la description du produit", "danger");
    }

    // Verification du champ reference
    if (!isset($_POST['product_reference']) || !is_numeric(trim(string: $_POST['product_reference'])) || trim(string: $_POST['product_reference']) < 0) {
      $info .= message("Veuillez renseigner la reference du produit avec un nombre positif", "danger");
    }

    // Verification du champ stock
    if (!isset($_POST['product_stock']) || !is_numeric(trim($_POST['stock'])) || trim($_POST['stock']) < 0) {
      $info .= message("Veuillez renseigner le stock du produit avec un nombre positif", "danger");
    }

    // Verification du champ prix
    if (!isset($_POST['product_price']) || !is_numeric(trim($_POST['product_price'])) || trim($_POST['product_price']) < 0) {
      $info .= message("Veuillez renseigner le prix du produit avec un nombre positif", "danger");
    }

    if (empty($info)) {
      if ($id) {
        // Si l'id existe alors on est en mode modification
        $buttonText = 'Modifier';
        updateProduct($id, $name, $description, $reference, $stock, $price);
        $info .= message("Le produit a bien été mis à jour", "success");
      } else {
        // Sinon on ajoute le nouveau produit
        addProduct($name, $price, $reference, $description, $stock);
        $info .= message("Le produit a bien été ajouté", "success");
      }
    }
  }
}
*/
require_once '../inc/header.inc.php';

?>


<div class="container my-5">
  <?= $info; ?>
  <h2 class="text-center my-5">Ajout de Bijoux</h2>
  <div class="w-75 mx-auto">
    <form action="" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $id; ?>">
      <input type="hidden" name="old_image" value="<?= $image; ?>">
      <div class="mb-3">
        <label for="product_name" class="form-label">Nom du produit</label>
        <input type="text" class="form-control" id="product_name" value="<?= $name; ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="product_description">Description</label>
        <textarea class="form-control" id="product_description" cols="30" rows="5"><?= $description; ?></textarea>
      </div>
      <div class="mb-3">
        <label class="form-label" for="product_image">Image du produit</label>
        <input type="file" class="form-control" id="product_image"></input>
      </div>
      <div class="row">
        <div class="col mb-3">
          <label class="form-label" for="product_reference">Référence</label>
          <input type="number" class="form-control" id="product_reference" value="<?= $reference; ?>">
        </div>
        <div class="col mb-3">
          <label class="form-label" for="product_stock">Stock</label>
          <input type="number" class="form-control" id="product_stock" value="<?= $stock; ?>">
        </div>
        <div class="col mb-3">
          <label for="product_price" class="form-label">Prix</label>
          <input type="number" class="form-control" id="product_price" value="<?= $price; ?>">
        </div>
      </div>
      <div class="d-flex justify-content-center my-5">
        <button type="submit" class="btn btn-diamonta-pink w-25"><?= $buttonText; ?></button>
      </div>
    </form>
  </div>
</div>






<?php require_once '../inc/footer.inc.php'; ?>