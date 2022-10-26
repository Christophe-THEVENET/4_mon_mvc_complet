<?php

// ********* TEMPLATE LISTE DES FILMS **************

$title = 'Liste de tous mes films';


ob_start();
?>


<ul>
  <?php foreach ($list as $item) : ?>
    <li><?= $item->getTitle() ?></li>
  <?php endforeach; ?>
</ul>

<?php

$content = ob_get_clean();

require_once('layout.php');

