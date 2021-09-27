<?php

namespace App\Controller;

use App\Model\GameManager;

class GameController extends AbstractController {

    private $gameManager;
    
    public function __construct() {
        $this->gameManager = new GameManager;
        session_start();
    }
    
    public function joueur1() {

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            // sauvegarde son nouveau shoot dans la session
            $this->saveShootPlayer1($_POST['shoot']);

            // transforme la lettre en nombre
            $_SESSION['letter'] = $this->gameManager->letterToNumber($_POST['shoot']);
            // transforme le chffre de type string en integer
            $_SESSION['number'] = $this->gameManager->numberToNumber($_POST['shoot']);
            
            // on verifie si le joueur touche un bateau
            if(in_array($_POST['shoot'], $_SESSION['coordinatePlayer2']) === TRUE) {

                $this->setShootForGameBoardPlayer1(2);
                // j'incrémente ses points
                ++$_SESSION['pointPlayer1'];

                // au bout de 17 points la partie se termine 
                if ($_SESSION['pointPlayer1'] >= 17) {
                    // sauvegarde en BDD les shoot des joueurs lors de la partie 
                    $this->gameManager->saveShoot($_SESSION['shootPlayer1'], $_SESSION['idPlayer1']);
                    $this->gameManager->saveShoot($_SESSION['shootPlayer2'], $_SESSION['idPlayer2']);
                    return $this->redirect302('/end');
                }
                $winMessage = 'BINGO A VOUS DE REJOUER';
            }
            else {
                $this->setShootForGameBoardPlayer1(3);
                return $this->redirect302('/joueur2');
            }
        }

        require(__DIR__ . '/../View/Game/joueur1.php');
    }
    
    // on applique le même système pour le joueur 2
    public function joueur2() {
        var_dump($_SESSION['coordinatePlayer1']);
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $this->saveShootPlayer2($_POST['shoot']);

            $_SESSION['letter'] = $this->gameManager->letterToNumber($_POST['shoot']);
            $_SESSION['number'] = $this->gameManager->numberToNumber($_POST['shoot']);
            

            if(in_array($_POST['shoot'], $_SESSION['coordinatePlayer1']) === TRUE) {

                $this->setShootForGameBoardPlayer2(2);
                ++$_SESSION['pointPlayer2'];

                if ($_SESSION['pointPlayer2'] >= 17) {
                    $this->gameManager->saveShoot($_SESSION['shootPlayer2'], $_SESSION['idPlayer2']);
                    $this->gameManager->saveShoot($_SESSION['shootPlayer1'], $_SESSION['idPlayer1']);
                    return $this->redirect302('/end');
                }
                $winMessage = 'BINGO A VOUS DE REJOUER';
            }
            else {
                $this->setShootForGameBoardPlayer2(3);
                return $this->redirect302('/joueur1');
            }   
        }
        require(__DIR__ . '/../View/Game/joueur2.php');
        
    }

    public function end() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->destroySession();
            $this->redirect302('/');
        }
        require(__DIR__ . '/../View/Game/end.php');
    }
}