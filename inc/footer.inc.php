<?php require_once 'functions/functions.php'; ?>
<?php ob_end_flush(); // Send the contents of the output buffer and turn off output buffering. It's typically used to ensure that all output is sent to the browser immediately, rather than being buffered by PHP. This can be useful in certain situations, such as when you need to send a response to the browser before the script has finished executing. ?>
</main>
<footer class="d-flex justify-content-around align-items-start text-white mt-5">
  <div class="d-flex flex-column justify-content-start align-items-center gap-2">
    <h5 class="text-uppercase text-diamonta-pink">Service client</h5>
    <a href="#" class="px-2 link-light text-decoration-none">Personnalisation</a>
    <a href="#" class="px-2 link-light text-decoration-none">Contactez-nous</a>
    <a href="#" class="px-2 link-light text-decoration-none">Prenez RDV</a>
    <a href="#" class="px-2 link-light text-decoration-none">FAQs</a>
  </div>
  <div class="d-flex flex-column justify-content-start align-items-center gap-2">
    <h5 class="text-uppercase text-diamonta-pink">Livraison et retours</h5>

    <a href="#" class="px-2 link-light text-decoration-none">Suivez votre commande</a>
    <a href="#" class="px-2 link-light text-decoration-none">Soin et réparation</a>

  </div>
  <div class="d-flex flex-column justify-content-start align-items-center gap-2">
    <h5 class="text-uppercase text-diamonta-pink">Carrières</h5>

    <a href="#" class="px-2 link-light text-decoration-none">Nous rejoindre</a>
    <a href="#" class="px-2 link-light text-decoration-none">Collaborer</a>

  </div>
  <div class="d-flex flex-column justify-content-start align-items-center gap-2">
    <h5 class="text-uppercase text-diamonta-pink">Mentions légales</h5>

    <a href="#" class="px-2 link-light text-decoration-none">Politique de confidentialité</a>
    <a href="#" class="px-2 link-light text-decoration-none">Conditions d'utilisation</a>
    <a href="#" class="px-2 link-light text-decoration-none">Conditions générales de vente</a>
    <a href="#" class="px-2 link-light text-decoration-none">Indice de l'égalité Homme-Femme</a>

  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="<?= BASE_URL; ?>assets/js/script.js"></script>
</body>

</html>