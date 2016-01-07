<?php

use Solid\Patterns\Observer\Solid;
use Solid\Patterns\Observer\Player;
use Solid\Patterns\Observer\Game;

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

$game = new Game();

// Au premier tour de jeu, Torp reçoit le numéro 2, Zeita le 3
$torp  = new Player('Torp', 2);
$zeita = new Player('Zeita', 3);

// Ils sont donc inscrits...
$game->attach($torp);
$game->attach($zeita);

// ... et la roue est tournée.
echo "<h2>Premier tour de jeu</h2>";
$game->turn();

// Au second tour de jeu, Zeita se désinscrit.
$game->detach($zeita);

// Solid et Pearl veulent jouer. Il reçoivent respectivement le 1 et le 3.
$solid = new Player('Solid', 1);
$game->attach($solid);
$pearl = new Player('Pearl', 3);
$game->attach($pearl);

// ... et la roue est tournée.
echo "<h2>Second tour de jeu</h2>";
$game->turn();