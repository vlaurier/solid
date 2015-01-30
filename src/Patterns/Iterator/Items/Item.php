<?php
namespace Solid\Patterns\Iterator\Items;

class Item 
{
    private $reference;
    private $type;
    
    public function __construct($reference, $type)
    {
        $this->reference = $reference;
        $this->type = $type;
    }
    
    public function __toString() {
        return $this->type.' ('.$this->reference.')';
    }
}
