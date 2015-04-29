<?php
use \Solid\Patterns\Strategy\Solid;
use Solid\Patterns\Strategy\CrossingToolbox\Ballon;
use Solid\Patterns\Strategy\CrossingToolbox\Stilts;
use Solid\Patterns\Strategy\CrossingToolbox\Unicycle;
use Solid\Patterns\Strategy\MusicalStrategy\Trumpet;

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

//$solid = new Solid();
//
//$solid->setCrossingStrategy(new Ballon());
//echo $solid->cross();

// Second demo with all circus context

$animals = array(
    new \Solid\Patterns\Strategy\CircusContext\Solid('Solid'),
);

foreach ($animals as $animal) {
    echo $animal->cross();
    echo $animal->play();
}

$animals[0]->setCrossingStrategy(new Stilts());
$animals[0]->setMusicalStrategy(new Trumpet());

foreach ($animals as $animal) {
    echo $animal->cross();
    echo $animal->play();
}