<?php

namespace App\Model;

class Connexion {

    private $connexion;

    // connexion a la base de donées 
    public function connect() {
        if ($this->connexion === null) {
            $this->connexion = pg_connect(
                "host=127.0.0.1 port=5432 dbname=touchecoule user=superadmin password=Centralecoleweb21"
            );
        }
        return $this->connexion;
    }

    // deconnexion a la base de donées 
    public function disconnect() {
        if ($this->connexion !== null) {
            pg_close($this->connexion);
            $this->connexion = null;
        }
    }
}