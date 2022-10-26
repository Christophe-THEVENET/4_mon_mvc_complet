<?php

// ********** ROUTE LES PAGES ***********
require_once './Controllers/Controller.php';
require_once './models/Movies.php'; // classes recup tous les posts
require_once './models/Movie.php'; // classes recup 1 post
require_once './models/ListMovies.php'; // classes recup liste des films

$controller = new Controller();

// si y a id ds l url afficher 1 post selon l id sinon afficher tout les posts

if (isset($_GET['id'])) {

  $controller->getOneMovie();
  // si y a page ds l url afficher liste des films
} else if (isset($_GET['page']) && $_GET['page'] === 'list') {

  $controller->getListAllMovies();
  // sinon afficher tous les films
} else {
  $controller->getAllMovies();
}
