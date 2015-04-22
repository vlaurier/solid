<?php

use Solid\Patterns\Iterator\Aggregates\Item;
use Solid\Patterns\Iterator\Aggregates\StoreRoomAggregate;
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

$storeRoom = new StoreRoomAggregate($shelves);

echo "<h2> Exemple d'une itération complète sur le débarras avec un générateur</h2>";

foreach ($storeRoom->getGenerator() as $item) {
    print $item;
}


