<?php
namespace Solid\Patterns\Iterator\Aggregates;

use Solid\Patterns\Iterator\StoreRoomAggregate;
use Solid\Patterns\Iterator\Iterators\FilterTorp;
use Solid\Patterns\Iterator\Iterators\Torp;

class FilteredStoreRoom extends StoreRoomAggregate
{
    public function getIterator()
    {
        return new FilterTorp(new Torp($this->shelves), 'Ballon');
    }
}
