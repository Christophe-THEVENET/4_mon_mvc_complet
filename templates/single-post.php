<?php
// ********* TEMPLATE 1 FILM **************


$title = 'Zoom sur ce film';




if (!($movie)) { // gestion erreur si pas de post en bdd / id de l url
  $content = "Cette photo n'existe pas.";
} else {

  ob_start(); // mes en mémoire ds 1 variable tout ce qu il y a a la suite jusqu a ob_get_clean().

?>

  <!--   on travaille avec $post objet qui vien du modele Post -->
  <!--   pas besoin d imports dans les tempates -->

  <article style="display: flex;flex-direction: column; justify-content: space-around; align-items:center">
    <h2><?= $movie->getTitle() ?></h2>
    <img src="img/<?= $movie->getImage() ?>" width="500" />
  </article>

<?php

  $content = ob_get_clean(); // tout le contenu va ds la variable $content
}
require_once('layout.php');
