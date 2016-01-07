<?php

use Solid\Patterns\Strategy\CircusContext\Solid;
use Solid\Patterns\Strategy\CircusContext\Torp;
use Solid\Patterns\Strategy\CircusContext\Pearl;
use Solid\Patterns\Strategy\CrossingToolbox\Unicycle;
use Solid\Patterns\Strategy\CrossingToolbox\Stilts;
use Solid\Patterns\Strategy\CrossingToolbox\Ballon;
use Solid\Patterns\Strategy\CrossingToolbox\NoCrossingStrategy;
use Solid\Patterns\Strategy\MusicalStrategy\Trumpet;
use Solid\Patterns\Strategy\MusicalStrategy\Cymbal;
use Solid\Patterns\Strategy\MusicalStrategy\NoMusicalStrategy;


require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

$solid = new Solid(new Unicycle());
$torp = new Torp(null, new Trumpet());
$pearl = new Pearl(null, new Trumpet());

$animals = array($solid, $torp, $pearl);

echo "<h2>Premier tour</h2>";

go($animals);

echo "<h2>Deuxième tour</h2>";
// Ensuite Solid dépose son monocycle, prend une trompette pour jouer, et Torp joue des cymbales.
$solid->setMusicalStrategy(new Trumpet());
//$solid->setCrossingStrategy(new NoCrossingStrategy());
$torp->setMusicalStrategy(new Cymbal());
$pearl->setMusicalStrategy(new Cymbal());

go($animals);

echo "<h2>Troisième tour</h2>";
// Enfin Solid change pour des cymbales.Torp dépose les siennes, et prend des échasses.
$solid->setMusicalStrategy(new Cymbal());
$torp->setCrossingStrategy(new Stilts());
$pearl->setMusicalStrategy(new NoMusicalStrategy());

go($animals);

//$solid->setCrossingStrategy(new Ballon());
//$torp->setCrossingStrategy(new Unicycle());
//$pearl->setCrossingStrategy(new Unicycle());
function go(array $animals)
{
    foreach ($animals as $animal) {
        echo $animal->cross();
        echo $animal->play();
    }
}