<?php

class Movie
{

  use DatabaseConnect; // connexion bdd

  private $id;
  private $title;
  private $image;


  // ***************** requéter 1 film avec id url *********************

  public function getOneMovie($id)
  {

    if (!is_null($this->pdo)) {
      $statement = $this->pdo->prepare('SELECT * FROM post WHERE id = :id');
    }
    $movie = null;
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    if ($statement->execute()) {
      $movie = $statement->fetchObject('Movie'); // renvoi sous forme d objets
      if (!is_object($movie)) {
        $movie = null;
      }
    }
    return $movie; // 1 objet de la table
  } 

  // ======================= return 1 film -> $movie ================================









  public function getId()
  {
    return $this->id;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function getImage()
  {
    return $this->image;
  }
}
