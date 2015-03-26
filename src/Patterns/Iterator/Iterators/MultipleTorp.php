<?php
namespace Solid\Patterns\Iterator\Iterators;

class MultipleTorp extends \AppendIterator
{
    public function __construct($shelves, $type)
    {
        parent::__construct();
        $torp = new Torp($shelves);
        $filterTorp = new FilterTorp($torp, $type);
        $this->append($torp);
        $this->append($filterTorp);
    }
}
