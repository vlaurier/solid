<?php

use Solid\Patterns\Iterator\Aggregates\Item;
use Solid\Patterns\Iterator\Aggregates\StoreRoom;
use Solid\Patterns\Iterator\Aggregates\FilteredStoreRoom;
use Solid\Patterns\Iterator\Aggregates\InventoryAggregate;
use Solid\Patterns\Iterator\Aggregates\Page;

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

$cup2015        = new Item('C2015', 'Coupe');
$cup2017        = new Item('C2017', 'Coupe');
$ballonYellow   = new Item('B001', 'Ballon');
$ballonRed      = new Item('B002', 'Ballon');
$skittles       = new Item('S001', 'Quilles');

$shelves = array(
    array($cup2015, $cup2017),
    array($ballonYellow, $ballonRed),
    array($skittles),
);

$storeRoom = new StoreRoom($shelves);
$filteredStoreRoom = new FilteredStoreRoom($shelves);

$inventory = new InventoryAggregate(
    array
    (
        new Page('C2013', 'Coupe', "Coupe sans anses gagnée au concours du cirque Rigolo de l'année 2013", 'ébréchée'),
        new Page('C2014', 'Coupe', 'Coupe avec anses de 2014 gagnée au concours des animaux bien entretenus', 'toute neuve'),
        new Page('B1', 'Ballon', 'Un ballon rouge', 'flambant neuf'),
        new Page('B2', 'Ballon', 'Un ballon vert', 'usagé'),
        new Page('S1', 'Quilles', 'Des quilles rouges', 'toutes neuves'),
    )
);

$solid = $inventory->getIterator();
$torp = $storeRoom->getIterator();

print "<h2>Gepetto demande à ce que Torp et Solid s'intéressent au premier article.</h2>";

print "Il se trouve à l'emplacement ".$torp->key()." du débarras, ";
print "et à l'emplacement ".$solid->key()." de l'inventaire.<br/>";
print "Dans le débarras, il y a bien un article à cet emplacement, donc valid() renvoie: ".$torp->valid()."<br/>";
print "Dans l'inventaire, il y a bien une page à cet emplacement, donc valid() renvoie: ".$solid->valid()."<br/>";
print "Torp voit qu'il s'agit de: ".$torp->current().'<br/>';
print "Solid lit la description: ".$solid->current()->getDescription().'<br/><hr/>';

print "<h2>Gepetto demande ensuite de passer à l'article suivant.</h2>";
$torp->next();
$solid->next();
print "Il se trouve à l'emplacement ".$torp->key()." du débarras, ";
print "et à l'emplacement ".$solid->key()." de l'inventaire.<br/>";
print "Dans le débarras, il y a bien un article à cet emplacement, donc valid() renvoie: ".$torp->valid()."<br/>";
print "Dans l'inventaire, il y a bien une page à cet emplacement, donc valid() renvoie: ".$solid->valid()."<br/>";
print "Torp voit qu'il s'agit de: ".$torp->current().'<br/>';
print "Solid lit la description: ".$solid->current()->getDescription().'<br/><hr/>';

print "<h2>Gepetto veut finalement recommencer depuis le début.</h2>";

$torp->rewind();
$solid->rewind();

print "On revient à l'emplacement ".$torp->key()." du débarras,";
print " et à l'emplacement ".$solid->key()." de l'inventaire.<br/><hr/>";


echo "<h2> Exemple d'une itération complète sur l'inventaire</h2>";

foreach ($inventory->getIterator() as $page) {
    print $page."<hr/>";
}

echo "<h2> Exemple d'une itération complète sur le débarras</h2>";

foreach ($storeRoom->getIterator() as $item) {
    print $item;
}

echo "<h2> Exemple d'une itération avec un itérateur filtrant</h2>";

foreach ($filteredStoreRoom->getIterator() as $item) {
    print $item;
}
