<?php

use App\Controller\GameController;
use App\Controller\SetupController;

require __DIR__ . '/../vendor/autoload.php';


if($_SERVER['REQUEST_URI'] === '/') {
    $controller = new SetupController();
    $controller->setupPseudoAndCreateGame();
}
else if ($_SERVER['REQUEST_URI'] === '/boat') {
    $controller = new SetupController();
    $controller->setupBoatPlayer1();
    $controller->setupBoatPlayer2();
}
else if ($_SERVER['REQUEST_URI'] === '/joueur1') {
    $controller = new GameController();
    $controller->joueur1();
}
else if ($_SERVER['REQUEST_URI'] === '/joueur2') {
    $controller = new GameController();
    $controller->joueur2();
}
else if ($_SERVER['REQUEST_URI'] === '/end') {
    $controller = new GameController();
    $controller->end();
}
else {
    // header($_SERVER['SERVER_PROTOCOL'], "404 Not Found");
    http_response_code(404);
}
