<?php

namespace App\Controller;

use App\Model\Setup;

class SetupController extends AbstractController {
    private $setup;

    private $porteAvion = 5;
    private $croiseur = 4;
    private $contreTorpilleurs = 3;
    private $sousMarin = 3;
    private $torpilleur = 2;

    public function __construct() {
        $this->setup = new Setup;
        session_start();
    }

    // Récupère les pseudo des joueurs et les envoie en BDD
    public function setupPseudoAndCreateGame() {
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
            if ($_POST['player1'] !== '' and $_POST['player2'] !== '') {
                $this->setup->savePseudo($_POST['player1'], $_POST['player2']);
                // sauvegarde les pseudo en session
                $this->setPseudoPlayer1ToSession($_POST['player1']);
                $this->setPseudoPlayer2ToSession($_POST['player2']);

                // récupère l'id de chaque jouers
                $IdPlayer1 = ($this->setup->getIdPlayer($_POST['player1']));
                $IdPlayer2 = ($this->setup->getIdPlayer($_POST['player2']));

                //sauvegarde l'id des joueurs en session
                $this->setIdPlayer1ToSession($IdPlayer1);
                $this->setIdPlayer2ToSession($IdPlayer2);
                
                // créer la partie en BDD 
                $this->setup->createGame($IdPlayer1, $IdPlayer2);

                // récupère l'id de la game
                $game = $this->setup->getIdGame($IdPlayer1, $IdPlayer2);

                // sauvegarde la game en session
                $this->setGameToSession($game);

                $this->redirect302('/boat');
            }
            $errorMessage = ' /!\ Renseignez-moi ces pseudos /!\ :';
        }
        require(__DIR__ . '/../View/Setup/pseudo.php');
    }

    // Récupère les coordonnées des bateaux et les envoie en BDD
    public function setupBoatPlayer1() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tabOfcoordinatePlayer1 = [];

            if($tabOfcoordinatePlayer1 === [] ) {

                // Porte-avion
                $porteAvionDebutJ1 = ($_POST['porte-avion-debut-j1']);
                $porteAvionFinJ1 = ($_POST['porte-avion-fin-j1']);
                $tabOfcoordinatePlayer1 = $this->setup->incrementCoordinate($porteAvionDebutJ1, $porteAvionFinJ1, $this->porteAvion, $tabOfcoordinatePlayer1);
            
                // Croiseur
                $croiseurDebutJ1 = ($_POST['croiseur-debut-j1']);
                $croiseurFinJ1 = ($_POST['croiseur-fin-j1']);
                $tabOfcoordinatePlayer1 = $this->setup->incrementCoordinate($croiseurDebutJ1, $croiseurFinJ1, $this->croiseur, $tabOfcoordinatePlayer1);
                

                // Contre-torpilleurs
                $contreTorpilleursDebutJ1 = ($_POST['contre-torpilleurs-debut-j1']);
                $contreTorpilleursFinJ1 = ($_POST['contre-torpilleurs-fin-j1']);
                $tabOfcoordinatePlayer1 = $this->setup->incrementCoordinate($contreTorpilleursDebutJ1, $contreTorpilleursFinJ1, $this->contreTorpilleurs, $tabOfcoordinatePlayer1);
                

                // Sous-marin
                $sousMarinDebutJ1 = ($_POST['sous-marin-debut-j1']);
                $sousMarinFinJ1 = ($_POST['sous-marin-fin-j1']);
                $tabOfcoordinatePlayer1 = $this->setup->incrementCoordinate($sousMarinDebutJ1, $sousMarinFinJ1, $this->sousMarin, $tabOfcoordinatePlayer1);
            

                // Torpilleur
                $torpilleurDebutJ1 = ($_POST['torpilleur-debut-j1']);
                $torpilleurFinJ1 = ($_POST['torpilleur-fin-j1']);
                $tabOfcoordinatePlayer1 = $this->setup->incrementCoordinate($torpilleurDebutJ1, $torpilleurFinJ1, $this->torpilleur, $tabOfcoordinatePlayer1);

                //Enregistre mon tableau dans la session
                $this->setCoodinatePlayer1ToSession($tabOfcoordinatePlayer1);

                // sauvegarde les coordonées en BDD
                $this->setup->saveCoordinate($tabOfcoordinatePlayer1, $_SESSION['idPlayer1']);
            }
            $errorMessage = ' /!\ Renseignez les coordonées /!\ :';
        }

    }
    
    public function setupBoatPlayer2() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tabOfcoordinatePlayer2 = [];
    
            if($tabOfcoordinatePlayer2 === [] ) {
    
                // Porte-avion
                $porteAvionDebutJ2 = ($_POST['porte-avion-debut-j2']);
                $porteAvionFinJ2 = ($_POST['porte-avion-fin-j2']);
                $tabOfcoordinatePlayer2 = $this->setup->incrementCoordinate($porteAvionDebutJ2, $porteAvionFinJ2, $this->porteAvion, $tabOfcoordinatePlayer2);
            
                // Croiseur
                $croiseurDebutJ2 = ($_POST['croiseur-debut-j2']);
                $croiseurFinJ2 = ($_POST['croiseur-fin-j2']);
                $tabOfcoordinatePlayer2 = $this->setup->incrementCoordinate($croiseurDebutJ2, $croiseurFinJ2, $this->croiseur, $tabOfcoordinatePlayer2);
                
    
                // Contre-torpilleurs
                $contreTorpilleursDebutJ2 = ($_POST['contre-torpilleurs-debut-j2']);
                $contreTorpilleursFinJ2 = ($_POST['contre-torpilleurs-fin-j2']);
                $tabOfcoordinatePlayer2 = $this->setup->incrementCoordinate($contreTorpilleursDebutJ2, $contreTorpilleursFinJ2, $this->contreTorpilleurs, $tabOfcoordinatePlayer2);
                
    
                // Sous-marin
                $sousMarinDebutJ2 = ($_POST['sous-marin-debut-j2']);
                $sousMarinFinJ2 = ($_POST['sous-marin-fin-j2']);
                $tabOfcoordinatePlayer2 = $this->setup->incrementCoordinate($sousMarinDebutJ2, $sousMarinFinJ2, $this->sousMarin, $tabOfcoordinatePlayer2);
            
    
                // Torpilleur
                $torpilleurDebutJ2 = ($_POST['torpilleur-debut-j2']);
                $torpilleurFinJ2 = ($_POST['torpilleur-fin-j2']);
                $tabOfcoordinatePlayer2 = $this->setup->incrementCoordinate($torpilleurDebutJ2, $torpilleurFinJ2, $this->torpilleur, $tabOfcoordinatePlayer2);
    
                //Enregistre mon tableau dans la session
                $this->setCoodinatePlayer2ToSession($tabOfcoordinatePlayer2);
    
                $this->setup->saveCoordinate($tabOfcoordinatePlayer2, $_SESSION['idPlayer2']);
                
                $this->redirect302('/joueur1');
            }
            $errorMessage = ' /!\ Renseignez les coordonées /!\ :';
        }
        require(__DIR__ . '/../View/Setup/boat.php');        
    }
}

