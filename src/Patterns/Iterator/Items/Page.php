<?php
namespace Solid\Patterns\Iterator\Items;

class Page
{
    private $reference;
    private $type;
    private $description;
    private $state;
    
    public function __construct($reference, $type, $description, $state)
    {
        $this->reference = $reference;
        $this->type = $type;
        $this->description = $description;
        $this->state = $state;
    }
    
    public function __toString() {
        $output = $this->type.' ('.$this->reference.')'.' ['.$this->state.']<br/>';
        $output .= $this->description.'<hr/>';
        
        return $output;
    }
}
