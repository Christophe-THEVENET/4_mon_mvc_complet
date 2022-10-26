<?php


require_once 'Database.php';

class ListMovies
{

    

    use DatabaseConnect; // connexion bdd

    // -------------------- requéter tout les films ------------------------
    public function getListAllMovies()
    {
        if (!is_null($this->pdo)) {
            $stmt = $this->pdo->query('SELECT * FROM post');
        }
        $list = [];
        while ($movie = $stmt->fetchObject('Movie')) { // recupere ligne par ligne en objet
            // on passe 'Movie' en paramètre c est la classe Movie, ca evite de répéter ds la classe Movies les propriétés et les getteurs
            $list[] = $movie; // tableau d objets
        }
        return $list;
    }

  // ======================= return tous les films -> $list ================================


    public function getId()
    {
      return $this->id;
    }
}
