<?php

namespace App\Model;

class Game {
    private $id;
    private $player1_id;
    private $player2_id;

    public function __construct(int $id = null, string $player1_id = null, string $player2_id = null) {
        $this->id = $id;
        $this->player1_id = $player1_id;
        $this->player2_id = $player2_id;
    }
    public static function toGameFromBD($object) {
        return new self(
            $object->id,
            $object->player1_id,
            $object->player2_id
        );
    }

    //------------------------------GETTER--------------------------//
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getIdPlayer1(): int
    {
        return $this->player1_id;
    }

    /**
     * @return int
     */
    public function getIdPlayer2(): int
    {
        return $this->player2_id;
    }

}