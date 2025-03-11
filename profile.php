<?php
require_once 'inc/functions.inc.php';
require_once 'inc/header.inc.php';

$user = $_SESSION['user'];

?>

<h1>Welcome <?= $user['prenom']; ?></h1>


<?php require_once 'inc/footer.inc.php'; ?>