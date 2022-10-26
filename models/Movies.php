<?php


require_once 'Database.php';

class Movies
{

    

    use DatabaseConnect; // connexion bdd

    // ----------------- requéter tout les films ---------------------
    public function getAllMovies()
    {
        if (!is_null($this->pdo)) {
            $stmt = $this->pdo->query('SELECT * FROM post');
        }
        $movies = [];
        while ($movie = $stmt->fetchObject('Movie')) { // recupere ligne par ligne en objet
            // on passe 'Movie' en paramètre c est la classe Movie, ca evite de répéter ds la classe Movies les propriétés et les getteurs
            $movies[] = $movie; // tableau d objets
        }
        return $movies;
    }

  // ======================= return tous les films -> $movies ================================


    public function getId()
    {
      return $this->id;
    }
}
