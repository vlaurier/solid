<?php
namespace Solid\Patterns\Iterator\Aggregates;

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
    
    public function __toString()
    {
        $output = "Type: ".$this->type.'<br/>';
        $output .= "Référence: ".$this->reference.'<br/>';
        $output .= "Etat: ".$this->state.'<br/>';
        $output .= "Description: ".$this->description.'<br/>';
        
        return $output;
    }

    public function getDescription()
    {
        return $this->description;
    }
}
