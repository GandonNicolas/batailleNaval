<?php

namespace App\Model;

class PlayerManager
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
    public function findIdFromPseudo(string $pseudo) {
        $connexion = $this->connexion->connect();
        $request = pg_query_params( $connexion, 'SELECT * FROM player where pseudo = $1;', [$pseudo]);

        $player = null;
        while ($data = pg_fetch_object($request)) {
            $player =  Player::toPlayerFromBD($data);
        }
        pg_free_result($request);
        return $player->getId();
    }
}