<?php
if (session_status() == PHP_SESSION_NONE) {
  ob_start(); // ob_start() est un outil essentiel pour la gestion du contenu et des en-têtes en PHP. Dans ton cas, il permet d'utiliser header() sans contrainte, de gérer tes redirections et d'afficher les erreurs ou les messages de confirmation aux endroits souhaités. Il faut toujours utilisé cette technique si on utilise des redirections et des headers.
  session_start();
}
define('BASE_URL', "http://localhost/DIAMONTA/");
function message(string $text, string $class): string
{
  return
    '<div class="w-100 mx-auto d-flex align-items-around alert alert-' . $class . '">' .
    '<span class="mx-auto">' . $text . '</span>' .
    '<button type="button" class="btn-close align-self-center position-absolute top-50% start-90%" data-bs-dismiss="alert"></button>' .
    '</div>';
}

function redirect(string $url)
{
  header("location: $url");
  exit;
}




