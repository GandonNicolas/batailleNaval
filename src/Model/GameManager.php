<?php

namespace App\Model;

class GameManager
{
    private $connexion;

    public function __construct()
    {
        $this->connexion = new Connexion;
    }

    /**
     * Récupération de l'utilisateur depuis la BDD par son Login
     *
     * @param string $login
     *
     * @return User|null
     *
     * @throws \Exception
     */
    public function findIdGameFromIdPlayer(int $pseudo1, int $pseudo2) {
        $connexion = $this->connexion->connect();
        $request = pg_query_params( $connexion, 'SELECT * FROM game where player1_id = $1 AND player2_id = $2;', [$pseudo1, $pseudo2]);

        $game = null;
        while ($data = pg_fetch_object($request)) {
            $game =  Game::toGameFromBD($data);
        }
        pg_free_result($request);
        return $game;
    }

    // sauvegarde les shoot en BDD
    public function saveShoot($shoot, $player) {
        $shoot = serialize($shoot);
        $connexion = $this->connexion->connect();
        pg_query_params($connexion, 'UPDATE player SET shoot = $1 WHERE id = $2', [$shoot, $player]);
    }

    public function deleteLastCharacter($string): string {
        $result = rtrim($string, ",");
        return $result;
    }
    function toNumber($dest) {
        if ($dest)
            return ord(strtolower($dest)) - 96;
        else
            return 0;
    }

    public function numberToNumber($shoot) {
        $shootNumber = substr($shoot, 1, 1);
        return $shootNumber = intval($shootNumber);
    }
    
    public function letterToNumber($shoot) {
        //  sépare la chaine de carractère en 2 
        $shootLetter = substr($shoot, 0, 1);
        // transforme la lettre en chiffre
        $shootLetter = $this->toNumber($shootLetter);
        return $shootLetter;
    }

}  