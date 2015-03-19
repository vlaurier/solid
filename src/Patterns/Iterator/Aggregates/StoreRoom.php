<?php
namespace Solid\Patterns\Iterator\Aggregates;

use Solid\Patterns\Iterator\StoreRoomAggregate;
use Solid\Patterns\Iterator\Iterators\Torp;

class StoreRoom extends StoreRoomAggregate
{
    public function getIterator()
    {
        return new Torp($this->shelves);
    }
}
