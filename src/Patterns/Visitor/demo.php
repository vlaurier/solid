<?php
use Solid\Patterns\Visitor\Animals\Solid;
use Solid\Patterns\Visitor\Animals\Torp;
use Solid\Patterns\Visitor\Animals\Otto;
use Solid\Patterns\Visitor\Animals\Lion;
use Solid\Patterns\Visitor\Animals\Panther;
use Solid\Patterns\Visitor\Visitors\Veterinarian;
use Solid\Patterns\Visitor\Visitors\Tamer;
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
$tamer = new Tamer();

echo "<h2>Passage du vétérinaire</h2>";
$solid->accept($veterinarian);
$torp->accept($veterinarian);
$otto->accept($veterinarian);

echo "<h2>Visite du dompteur</h2>";
$solid->accept($tamer);
$torp->accept($tamer);
$otto->accept($tamer);

echo "<h2>Visite du dompteur chez les félins</h2>";
$bigCats = new BigCats(array($torp, $lion, $panther));
$bigCats->accept($tamer);

echo "<h2>Visite du dompteur chez tous les animaux</h2>";
$bigCats = new BigCats(array($torp, $lion, $panther));
$all = new All(array($bigCats, $solid, $otto));

$all->accept($tamer);
