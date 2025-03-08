<?php
require_once 'inc/functions.inc.php';
require_once 'inc/header.inc.php';
?>

<div class="text-center bg-diamonta-blue">
  <div class="container-fluid d-flex justify-content-around align-items-center py-5">
    <div class="d-flex flex-column col-md-3 justify-content-center align-items-center">
      <h2 class="h2 text-light text-capitalize mb-3 lh-base">Avec tout notre amour, depuis 1837</h2>
      <a href="#" class="text-light p-1 text-decoration-none border-bottom border-light">Découvrir plus</a>
    </div>
    <div class="col-md-8">
      <video src="<?= BASE_URL; ?>assets/media/video/jewelry_store_video.mov" height="600" width="100%" autoplay loop
        muted class="img-fluid"></video></video>
    </div>
  </div>
</div>


<?php require_once 'inc/footer.inc.php'; ?>