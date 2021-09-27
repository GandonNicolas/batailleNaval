<?php

namespace App\Model;


class Setup {

    private $connexion;
    private $playerManager;

    public function __construct() {
        $this->connexion = new Connexion;
        $this->playerManager = new PlayerManager;
        $this->gameManager = new GameManager;
    }


    // PSEUDO
    public function getIdPlayer($player) {
        return $this->playerManager->findIdFromPseudo($player);
    }
    // enregistre les pseudo en BDD
    public function savePseudo($player1, $player2) {
        $connexion = $this->connexion->connect();
        pg_query_params($connexion, 'INSERT INTO player(pseudo) VALUES($1)', [$player1]);
        pg_query_params($connexion, 'INSERT INTO player(pseudo) VALUES($1)', [$player2]);
    }



    // GAME
    public function getIdGame($IdPlayer1, $IdPlayer2) {
        return $this->gameManager->findIdGameFromIdPlayer($IdPlayer1, $IdPlayer2) ;
    }

    public function createGame($IdPlayer1, $IdPlayer2) {
        $connexion = $this->connexion->connect();
        pg_query_params($connexion, 'INSERT INTO game(player1_id, player2_id) VALUES($1, $2)', [$IdPlayer1, $IdPlayer2]);
    }



    // BOAT
    public function incrementCoordinate($start, $end, $lengthOfBoat, $TabOfcoordinate) {
        // Les 4 lignes suivantes découpe la chaine de carratère en 2
        $lettreStart = substr($start, 0, 1);
        $chiffreStart = substr($start, 1, 1);
        $lettreEnd = substr($end, 0, 1);
        $chiffreEnd = substr($end, 1, 1); 

        // si c'est une colone (positionement verticale) on incrémente uniquement le chiffre
        if ($lettreStart === $lettreEnd) {
            for ($i=0; $i<$lengthOfBoat; $i++) {
            $coordinate = $lettreStart . $chiffreStart++ ;
            array_push($TabOfcoordinate, $coordinate);
            }
        }
        // si c'est une ligne (positionement horizontal) on incrémente uniquement la lettre 
        else {
            for ($i=0; $i<$lengthOfBoat; $i++) {
            $coordinate = $lettreStart++ . $chiffreEnd;
            array_push($TabOfcoordinate, $coordinate);
            }
        }
         
        //me renvoie les coordonées dans un tableau
        return $TabOfcoordinate;
    }

    public function saveCoordinate($coordinate, $player) {
        $coordinate = serialize($coordinate);
        $connexion = $this->connexion->connect();
        pg_query_params($connexion, 'UPDATE player SET coordinate = $1 WHERE id = $2', [$coordinate, $player]);
    }
}