<?php
require_once 'inc/functions.inc.php';

$info = '';

if (!empty($_POST)) {
  $check = true;
  foreach ($_POST as $key => $value) {
    if (empty($value)) {
      $check = false;
    }
  }

  if (!$check) {
    $info .= message('Veuillez remplir tous les champs', 'danger');
  } else {
    // Check all the fields for input errors
    // Check lastname
    if (!isset($_POST['lastname']) || strlen(trim($_POST['lastname'])) < 2 || strlen(trim($_POST['lastname'])) > 50) {
      $info .= message('Le nom doit contenir entre 2 et 50 caractères !', 'danger');
    }

    // Check firstname
    if (!isset($_POST['firstname']) || strlen(trim($_POST['firstname'])) < 2 || strlen(trim($_POST['firstname'])) > 50) {
      $info .= message('Le prénom doit contenir entre 2 et 50 caractères !', 'danger');
    }

    // Check email
    if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 5 || strlen(trim($_POST['email'])) > 100 || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $info .= message("L'email est invalide", "danger");
    }

    // Regular expression for the password & password checking
    $regexPass = "/^(?=.*[a-z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/"; // au moins 8 caracteres, avec une majuscule, un chiffre et un symbole
    if (!isset($_POST['password']) || !preg_match($regexPass, $_POST['password'])) {
      $info .= message("Le mot de passe est invalide", "danger");
    }

    // Check address
    if (!isset($_POST['address']) || strlen(trim($_POST['address'])) < 5 || strlen(trim($_POST['address'])) > 50) {
      $info .= message("L'adresse est invalide", "danger");
    }

    // Check phone number with regular expression
    $regexPhone = "/^[0-9]{10}$/";
    if (!isset($_POST['phone']) || !preg_match($regexPhone, $_POST['phone'])) {
      $info .= message("Le numéro de téléphone est invalide", "danger");
    }

    // ZIPCODE
    $regexZip = "/^[0-9]{5}$/";
    if (!isset($_POST['zip_code']) || !preg_match($regexZip, $_POST['zip_code'])) {
      $info .= message("Le code postal doit contenir 5 chiffres", "danger");
    }

    // CITY 
    if (!isset($_POST['city']) || strlen(trim($_POST['city'])) < 2 || strlen(trim($_POST['city'])) > 50) {
      $info .= message("La ville doit contenir entre 2 et 50 caractères", "danger");
    }

    // COUNTRY 
    if (!isset($_POST['country']) || strlen(trim($_POST['country'])) < 2 || strlen(trim($_POST['country'])) > 50) {
      $info .= message("Le pays doit contenir entre 2 et 50 caractères", "danger");
    }

    if (empty($info)) {
      $info .= message("Votre formulaire d'incription a bien été pris en compte", "success");

      $lastname = trim($_POST["lastname"]);
      $firstname = trim($_POST["firstname"]);
      $email = trim($_POST["email"]);
      $password = trim($_POST["password"]);
      $address = trim($_POST["address"]);
      $phone = trim($_POST["phone"]);
      $zip_code = trim($_POST["zip_code"]);
      $city = trim($_POST["city"]);
      $country = trim($_POST["country"]);

      $hashedPass = password_hash($password, PASSWORD_DEFAULT);

      $duplicateEmail = checkDbEmailPassword($email, $hashedPass);
      if ($duplicateEmail) {
        $info .= message("L'email est déjà utilisé !", "danger");
      } else {
        addUser($lastname, $firstname, $email, $hashedPass, $address, $phone, $zip_code, $city, $country);
        $info .= message("Inscription réussie ! Vous pouvez vous connecter <a href='login.php' class='text-danger fw-bold'>ici</a> ", "success");
      }
    }
  }
}

require_once 'inc/header.inc.php';
?>

<div class="container rounded-4 w-100" data-bs-theme="dark">
  <div class="p-5 pb-4 border-bottom-0 text-center">
    <h1 class="fw-bold mb-0 fs-2 text-center text-diamonta-pink">Veuillez vous inscrire</h1>
  </div>
  <?= $info; ?>
  <div class="p-5 pt-0 d-flex justify-content-center align-items-center">
    <form class="" method="post">

      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="lastname">Nom</label>
          <input type="text" class="form-control rounded-3" id="lastanme" name="lastname" placeholder="Pierre">
        </div>
        <div class="col-md-6 mb-3">
          <label for="firstname">Prénom</label>
          <input type="text" class="form-control rounded-3" id="firstname" name="firstname" placeholder="Brillante">
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="email">Email</label>
          <input type="text" class="form-control rounded-3" id="email" name="email"
            placeholder="pierre.brillante@example.com">
        </div>
        <div class="col-md-6 mb-3">
          <label for="password">Mot de passe</label>
          <div class="position-relative">
            <input type="password" class="form-control rounded-3 " id="password" name="password" placeholder="********">
            <i class="bi bi-eye-fill" id="eyeFill" onclick="showHidePass()"></i>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="phone">Téléphone</label>
          <input type="text" class="form-control rounded-3" id="phone" name="phone" placeholder="0612345678">
        </div>
        <div class="col-md-6 mb-3">
          <label for="address">Adresse</label>
          <input type="text" class="form-control rounded-3" id="address" name="address"
            placeholder="1 rue des pierres précieuses">
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="zip_code">Code Postal</label>
          <input type="text" class="form-control rounded-3" id="zip_code" name="zip_code" placeholder="75010">
        </div>
        <div class="col-md-4 mb-3">
          <label for="city">Ville</label>
          <input type="text" class="form-control rounded-3" id="city" name="city" placeholder="Paris">
        </div>
        <div class="col-md-4 mb-3">
          <label for="country">Pays</label>
          <input type="text" class="form-control rounded-3" id="country" name="country" placeholder="France">
        </div>
      </div>

      <div class="row d-flex flex-column justify-content-center align-items-center mt-3">
        <div class="d-flex flex-column justify-content-center align-items-center">
          <button class="w-25 col-md-6 mb-2 btn btn-lg rounded-3 btn-diamonta-pink" type="submit">S'inscrire</button>
          <small class="col-md-12 text-white text-center">En cliquant sur <em>s'inscrire</em> vous acceptez les
            termes et
            conditions.</small>
        </div>
      </div>

    </form>
  </div>
</div>

<?php require_once 'inc/footer.inc.php'; ?>