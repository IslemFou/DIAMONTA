<?php
require_once 'inc/functions/db.php';
require_once 'inc/functions/functions.php';
require_once 'inc/header.inc.php';

$user = $_SESSION['user'];

?>

<h1>Welcome <?= $user['email']; ?></h1>


<?php require_once 'inc/footer.inc.php'; ?>