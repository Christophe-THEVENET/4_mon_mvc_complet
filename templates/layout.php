<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Mon blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="min-height: 100vh">
  <header>
    <h1><?= $title ?></h1>
  </header>
  <section>
    <nav>
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="?page=list">liste de tous mes films</a></li>
      </ul>
    </nav>

    <!--   on travaille avec une variable pour insérer le bon contenu-->

    <?= $content ?>

  </section>
  <footer>
    <p style="position: absolute; bottom: 1px">Mon blog - Tous droits réservés</p>
  </footer>
</body>

</html>


<!-- 

Il est possible de solliciter directement le model depuis la vue a condition que:


  - La vue ne doit solliciter le modèle directement que pour un accès en   lecture des données, jamais en écriture.

  - La structure des données que va réceptionner la vue directement depuis le modèle doit rester simple et peu susceptible d'évoluer


-->