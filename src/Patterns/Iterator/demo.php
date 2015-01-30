<?php

use Solid\Patterns\Iterator\Items\Item;
use Solid\Patterns\Iterator\Items\StoreRoom;
use Solid\Patterns\Iterator\Items\Inventory;
use Solid\Patterns\Iterator\Items\Page;

require "../../../vendor/autoload.php";

$cup2015 = new Item('C2015', 'Cup');
$cup2017 = new Item('C2017', 'Cup');
$ballonYellow = new Item('B1', 'Ballon');
$ballonRed = new Item('B1', 'Ballon');
$skittles = new Item('S1', 'Skittles');

$shelves = array(
    array($cup2015, $cup2017),
    array($ballonYellow, $ballonRed),
    array($skittles),    
);

$storeRoom = new StoreRoom($shelves);

$inventory = new Inventory(
        array(
            new Page('C2015', 'Cup', 'A cup won in 2015', 'chipped'),
            new Page('C2017', 'Cup', 'A cup won in 2017', 'brand new'),
            new Page('B1', 'Ballon', 'A red ballon', 'brand new'),
            new Page('B2', 'Ballon', 'A green ballon', 'old'),
            new Page('S1', 'Skittles', 'Some red skittles', 'brand new'),
            'test',
        )
);
/*echo "<h1>The inventory Solid browse</h1>";
echo $inventory;

echo "<h1>The shelves Torp looks over</h1>";
echo $storeRoom;*/

echo "<h1> iteration with Solid</h1>";

foreach ($inventory->getIterator() as $page) {
    echo $page;
}

/*$inventoryIterator = $inventory->getIterator();
echo $inventoryIterator->key();
echo $inventoryIterator->current();
echo $inventoryIterator->next();
echo $inventoryIterator->key();
echo $inventoryIterator->current();
echo $inventoryIterator->next();
echo $inventoryIterator->key();
echo $inventoryIterator->current();
echo $inventoryIterator->next();
echo $inventoryIterator->key();
echo $inventoryIterator->current();
echo $inventoryIterator->next();
echo $inventoryIterator->key();
echo $inventoryIterator->current();
echo $inventoryIterator->next();
echo $inventoryIterator->key();
echo $inventoryIterator->current();
echo $inventoryIterator->next();*/

echo "<h1> iteration with Torp</h1>";
$it = $storeRoom->getIterator();
echo "<pre>";
/*$it->valid();
echo $it->current();
echo $it->key();
echo $it->next();
$it->valid();
echo $it->current();
echo $it->key();
echo $it->next();
$it->valid();
echo $it->current();
echo $it->key();
echo $it->next();
$it->valid();
echo $it->current();
echo $it->key();
echo $it->next();
$it->valid();
echo $it->current();
echo $it->key();
echo $it->next();
$it->valid();
echo $it->current();
echo $it->key();
echo $it->next();
var_dump($it->current());*/
foreach($it as $key => $value) {
   echo $value;
}
