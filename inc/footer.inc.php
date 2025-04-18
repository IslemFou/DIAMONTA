<?php require_once 'inc/functions.inc.php'; ?>
<?php ob_end_flush(); // Send the contents of the output buffer and turn off output buffering. It's typically used to ensure that all output is sent to the browser immediately, rather than being buffered by PHP. This can be useful in certain situations, such as when you need to send a response to the browser before the script has finished executing. ?>
</main>
<footer class="d-flex flex-column justify-content-center align-itms-center text-white">
  <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
    <li><a href="#" class="nav-link px-2 link-diamonta-pink">SERVICES CLIENTS</a></li>
    <li><a href="#" class="nav-link px-2 link-diamonta-pink">LIVRAISON ET RETOURS</a></li>
    <li><a href="#" class="nav-link px-2 link-diamonta-pink">CARRIERES</a></li>
    <li><a href="#" class="nav-link px-2 link-diamonta-pink">MENTION LEGALES</a></li>
  </ul>
  <p class="text-center text-white">©2025 Diamonta</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
  integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="<?= BASE_URL; ?>assets/js/script.js"></script>
</body>

</html>