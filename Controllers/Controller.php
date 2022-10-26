<?php

class Controller
{

  // controleur pour afficher liste des posts
  public function getAllMovies()
  {
    $movies = new Movies(); // classe plusieurs posts
    $movies = $movies->getAllMovies(); // retourne tableau d objets $posts (tous les posts)
    require_once './templates/list-post.php'; // ca c est la route (template tous les posts)
  }



  // controleur pour afficher 1 post
  public function getOneMovie()
  {
    $movie = new Movie(); // classe 1 post
    // check si y a id ds l url
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
      $movie = $movie->getOneMovie($_GET['id']); // retourne le post de l id en param
      require_once './templates/single-post.php'; // ca c est la route (template 1 post)
    } else {
      echo 'cette photo n\'existe pas';
    }
  }




 // controleur pour afficher liste des films en ul li
 public function getListAllMovies()
 {
   $list = new ListMovies(); // classe plusieurs posts
   $list = $list->getListAllMovies(); // retourne tableau d objets $posts (tous les posts)
   require_once './templates/list-all-movies.php'; // ca c est la route (template tous les posts)
 }




}


/*

- une methode de controlleur ne doit pas depacer 20 lignes

- il faut pas trop de code ds cette couche




*/
