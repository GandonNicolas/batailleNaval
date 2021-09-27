<?php

namespace App\Controller;


abstract class AbstractController {

    public function __construct() {
    }

    public function redirect302($location) {
        header('Location :' .$location, true, 302);
        exit();
    }

    
    // PLAYER 1
    public function setPseudoPlayer1ToSession($pseudoPlayer1) {
        $_SESSION['pseudoPlayer1'] = $pseudoPlayer1;
    }
    public function setIdPlayer1ToSession($IdPlayer1) {
            $_SESSION['idPlayer1'] = $IdPlayer1;
    }
    public function setCoodinatePlayer1ToSession($coordinate) {
        $_SESSION['coordinatePlayer1'] = $coordinate;
    }
    public function setPointPlayer1() {
        $_SESSION['pointPlayer1'] = 0;
    }
    public function saveShootPlayer1($shoot) {
        $_SESSION['shootPlayer1'] .= "$shoot,";
    }
    public function setShootForGameBoardPlayer1($int) {
        $_SESSION['gameBoardPlayer1'][$_SESSION['number']][$_SESSION['letter']] = $int;
    }


    // PLAYER 2
    public function setPseudoPlayer2ToSession($pseudoPlayer2) {
        $_SESSION['pseudoPlayer2'] = $pseudoPlayer2;
    }
    public function setIdPlayer2ToSession($IdPlayer2) {
        $_SESSION['idPlayer2'] = $IdPlayer2;
    }
    public function setCoodinatePlayer2ToSession($coordinate) {
        $_SESSION['coordinatePlayer2'] = $coordinate;
    }
    public function setPointPlayer2() {
        $_SESSION['pointPlayer2'] = 0;
    }
    public function saveShootPlayer2($shoot) {
        $_SESSION['shootPlayer2'] .= "$shoot,";
    }
    public function setShootForGameBoardPlayer2($int) {
        $_SESSION['gameBoardPlayer2'][$_SESSION['number']][$_SESSION['letter']] = $int;
    }

    // GAME
    public function setGameToSession($game) {
        $_SESSION['game'] = $game;
    }
    public function getGameFromSession() {
        $game = null;
        if (isset($_SESSION['game'])) {
            $game = unserialize($_SESSION['game']);
            echo 'JE PASSE LA';
        }
        return $game;
    }

    public function destroySession() {
        session_destroy();
    }
}