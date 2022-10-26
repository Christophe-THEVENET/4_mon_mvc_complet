<?php

// ********* TEMPLATE LISTE DES FILMS **************

$title = 'Mes films';



ob_start(); // mes en mémoire ds 1 variable tout ce qu il y a a la suite jusqu a ob_get_clean().
?>

<!--   on travaille avec $posts (tableau d objets) qui vien du modele Post -->
<!--   pas besoin d imports dans les tempates -->


<article style="display: flex; justify-content: space-around; align-items:center">
    <?php
    foreach ($movies as $movie) : ?>
        <a href="?id=<?= $movie->getId() ?>"> // lien id dans l url
            <div>
                <h2><?= $movie->getTitle() ?></h2>
                <img src="img/<?= $movie->getImage() ?>" width="250" />
            </div>
        </a>
    <?php endforeach; ?>
</article>

<?php

$content = ob_get_clean();

require_once('layout.php');
