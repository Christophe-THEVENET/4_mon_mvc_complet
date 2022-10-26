<?php

// login = exo_blog_mvc_base
// dbname = exo_blog_mvc_base
// pass = h*wta[CuUafDeR0[

// trait = copier/coller
trait DatabaseConnect // pour utiliser trait: use Name (pas oublier import)
{
  private $pdo = null;

  public function __construct()
  {
    try {
      $this->pdo = new PDO('mysql:host=localhost;dbname=exo_blog_mvc_base;charset=utf8', 'exo_blog_mvc_base', 'h*wta[CuUafDeR0[');
    } catch (PDOException $e) {
      exit('Erreur : ' . $e->getMessage());
    }
  }
}
