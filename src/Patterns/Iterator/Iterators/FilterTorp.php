<?php
namespace Solid\Patterns\Iterator\Iterators;

class FilterTorp extends \FilterIterator
{
    private $type;

    public function accept()
    {
        return $this->current()->getType() == $this->type;
    }
      
    public function __construct($iterator, $type)
    {
        parent::__construct($iterator);
        $this->type = $type;
    }
}
