<?php

use Solid\Patterns\Observer\Solid;
use Solid\Patterns\Observer\Player;
use Solid\Patterns\Observer\Game;

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

/*$game = new Game();

$solid = new Solid(3);

//add player
$game->attach($solid);

$game->turn();*/

$game = new Game();

$solid = new Player('Solid', 1);
$torp  = new Player('Torp', 2);
$otto  = new Player('Otto', 3);

//add player
$game->attach($solid);
$game->attach($torp);
$game->attach($otto);

$game->turn();
