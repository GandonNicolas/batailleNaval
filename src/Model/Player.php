<?php

namespace App\Model;

class Player
{
    private $id;
    private $pseudo;
    private $coordinate;
    private $shoot;

    public function __construct(int $id = null, string $pseudo = null, string $coordinate = null, string $shoot = null) {
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->coordinate = $coordinate;
        $this->shoot = $shoot;
    }
    public static function toPlayerFromBD($object) {
        return new self(
            $object->id,
            $object->pseudo,
            $object->coordinate,
            $object->shoot
        );
    }
    //------------------------------------GETTER--------------------------//
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    /**
     * @return string
     */
    public function getCoordinate(): string
    {
        return $this->coordinate;
    }
    /**
     * @return string
     */
    public function getShoot(): string
    {
        return $this->shoot;
    }


    //------------------------------------SETTER--------------------------//
    /**
     * @param string $coordinate
     */
    public function setCoordinate(string $coordinate)
    {
        $this->coordinate = $coordinate;
    }

    /**
     * @param string $shoot
     */
    public function setShoot(string $shoot)
    {
        $this->shoot = $shoot;
    }
}