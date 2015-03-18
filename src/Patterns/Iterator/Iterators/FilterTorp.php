<?php
namespace Solid\Patterns\Iterator\Iterators;

use Solid\Patterns\Iterator\StoreRoomIterator;

class FilterTorp extends \FilterIterator
{
    private $type;

    public function accept()
    {
        return $this->current()->getType() == $this->type;
    }
      
    public function __construct(StoreRoomIterator $iterator, $type)
    {
        parent::__construct($iterator);
        $this->type = $type;
    }
}
