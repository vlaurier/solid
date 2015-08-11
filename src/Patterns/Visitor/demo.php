<?php
use Solid\Patterns\Visitor\Animals\Solid;
use Solid\Patterns\Visitor\Animals\Torp;
use Solid\Patterns\Visitor\Animals\Otto;
use Solid\Patterns\Visitor\Animals\Lion;
use Solid\Patterns\Visitor\Animals\Panther;
use Solid\Patterns\Visitor\Visitors\Veterinarian;
use Solid\Patterns\Visitor\Visitors\Trainer;
use Solid\Patterns\Visitor\Animals\BigCats;
use Solid\Patterns\Visitor\Animals\All;

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

$solid = new Solid();
$torp = new Torp();
$otto = new Otto();
$lion = new Lion();
$panther = new Panther();

$veterinarian = new Veterinarian();
$trainer = new Trainer();

echo "<h2>Visite du dompteur chez les félins</h2>";
$bigCats = new BigCats(array($torp, $lion, $panther));
$bigCats->accept($trainer);

echo "<h2>Visite du dompteur chez tous les animaux</h2>";
$bigCats = new BigCats(array($torp, $lion, $panther));
$all = new All(array($bigCats, $solid, $otto));

$all->accept($trainer);
