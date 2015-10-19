<?php

use Solid\Patterns\Iterator\Aggregates\Item;
use Solid\Patterns\Iterator\Aggregates\StoreRoomAggregate;
use Solid\Patterns\Iterator\Aggregates\InventoryAggregate;
use Solid\Patterns\Iterator\Aggregates\Page;

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

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

echo "<h2> Itération complète sur le débarras avec un générateur</h2>";

foreach ($storeRoom->getIterator() as $item) {
    print $item;
}
