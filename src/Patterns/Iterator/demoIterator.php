<?php

use Solid\Patterns\Iterator\Aggregates\Item;
use Solid\Patterns\Iterator\Aggregates\StoreRoomAggregate;
use Solid\Patterns\Iterator\Aggregates\InventoryAggregate;
use Solid\Patterns\Iterator\Aggregates\Page;

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

// Le débarras est un ensemble de 4 étagères.
// Pour simplifier, on ne met que 2 articles sur chaque étagère.

$storeRoom = new StoreRoomAggregate(
    array(
        // Les coupes
        array(new Item('C2015', 'Coupe'), new Item('C2014', 'Coupe')),
        // Les articles de jongle
        array(new Item('SK01', 'Quilles'), new Item('H001', 'Cerceau')),
        // Les ballons
        array(new Item('B001', 'Ballon'), new Item('B002', 'Ballon')),
        // Les tabourets
        array(new Item('ST01', 'Tabouret'), new Item('ST02', 'Tabouret')),
    )
);

// L'inventaire est un simple classeur formé de pages.

$inventory = new InventoryAggregate(
    array
    (
        new Page('C2015', 'Coupe',
            "Coupe sans anses gagnée au concours du cirque Rigolo en 2015",
            'ébréchée'),
        new Page('C2014', 'Coupe',
            'Coupe avec anses de 2014 du concours des animaux bien entretenus',
            'toute neuve'),
        new Page('SK01', 'Quilles', 'Des quilles rouges', 'très bon état'),
        new Page('H001', 'Cerceau', 'Cerceau multicolore', 'usagé'),
        new Page('B001', 'Ballon', 'Un ballon jaune brilliant', 'bon'),
        new Page('B002', 'Ballon', 'Un ballon vert', 'bon'),
        new Page('ST01', 'Tabouret', 'Tabouret en métal', 'inutilisable'),
        new Page('ST02', 'Tabouret', 'Tabouret en pin', 'neuf'),
    )
);

$solid = $inventory->getIterator();
$torp = $storeRoom->getIterator();

echo "<h2>Gepetto veut que les animaux s'intéressent au premier article.</h2>";

print "Il se trouve à l'emplacement ".$torp->key()." du débarras, ";
print "et à l'emplacement ".$solid->key()." de l'inventaire.<br/>";
print "Dans le débarras, il y a bien un article à cet emplacement !";
print "donc valid() renvoie: ".$torp->valid()."<br/>";
print "Dans l'inventaire, il y a bien une page à cet emplacement!";
print "donc valid() renvoie: ".$solid->valid()."<br/>";
print "Torp voit qu'il s'agit de l'article: ".$torp->current().'<br/>';
print "Solid lit la description: ".$solid->current()->getDescription().'<br/>';

echo "<hr/><h2>Gepetto demande ensuite de passer à l'article suivant.</h2>";

$torp->next();
$solid->next();

print "Il se trouve à l'emplacement ".$torp->key()." du débarras, ";
print "et à l'emplacement ".$solid->key()." de l'inventaire.<br/>";
print "Dans le débarras, il y a bien un article à cet emplacement!";
print "donc valid() renvoie: ".$torp->valid()."<br/>";
print "Dans l'inventaire, il y a bien une page à cet emplacement!";
print "donc valid() renvoie: ".$solid->valid()."<br/>";
print "Torp voit qu'il s'agit de: ".$torp->current().'<br/>';
print "Solid lit la description: ".$solid->current()->getDescription().'<br/>';

print "<hr/><h2>Gepetto veut finalement recommencer depuis le début.</h2>";

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
