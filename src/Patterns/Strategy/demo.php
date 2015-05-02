<?php
use Solid\Patterns\Strategy\CircusContext\Solid;
use Solid\Patterns\Strategy\CircusContext\Torp;
use Solid\Patterns\Strategy\CircusContext\Otto;
use Solid\Patterns\Strategy\CrossingToolbox\NoCrossingStrategy;
use Solid\Patterns\Strategy\MusicalStrategy\NoMusicalStrategy;
use Solid\Patterns\Strategy\CrossingToolbox\Ballon;
use Solid\Patterns\Strategy\CrossingToolbox\Stilts;
use Solid\Patterns\Strategy\CrossingToolbox\Unicycle;
use Solid\Patterns\Strategy\MusicalStrategy\Trumpet;
use Solid\Patterns\Strategy\MusicalStrategy\Cymbal;

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

//$solid = new Solid();
//
//$solid->setCrossingStrategy(new Ballon());
//echo $solid->cross();

// Second demo with all circus context

$animals = array(
    new Solid(new Unicycle()),
    new Torp(null, new Trumpet()),
    new Otto(null, new Trumpet()),
);

echo "<h2>Premier passage</h2>";
foreach ($animals as $animal) {
    echo $animal->cross();
    echo $animal->play();
}

// Solid descend du monocycle et prend une trompette.
$animals[0]->setCrossingStrategy(new NoCrossingStrategy());
$animals[0]->setMusicalStrategy(new Trumpet());

// Torp a déposé son instrument.
$animals[1]->setMusicalStrategy(new NoMusicalStrategy());

// Otto échange sa trompette contre les cymbales.
$animals[2]->setMusicalStrategy(new Cymbal());

echo "<h2>Deuxième passage</h2>";
foreach ($animals as $animal) {
    echo $animal->cross();
    echo $animal->play();
}

// Solid reprend des cymbales
$animals[0]->setMusicalStrategy(new Cymbal());

// Torp traverse en échasses.
$animals[1]->setCrossingStrategy(new Stilts());

// Otto salue
$animals[2]->setMusicalStrategy(new NoMusicalStrategy());

echo "<h2>Troisième passage</h2>";
foreach ($animals as $animal) {
    echo $animal->cross();
    echo $animal->play();
}

// Démo des cas d'exceptions.

// Si on passe un article d'équilibre à Otto.
//$animals[2]->setCrossingStrategy(new Stilts());

// Si on passe à Ballon à Solid
//$animals[0]->setCrossingStrategy(new Ballon());
