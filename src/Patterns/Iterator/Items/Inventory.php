<?php
namespace Solid\Patterns\Iterator\Items;

use Solid\Patterns\Iterator\Iterators\Solid;

class Inventory 
{
    private $pages;
    
    public function __construct(array $pages)
    {
        // On vérifie que chaque élément du tableau passé en argument est bien un objet Page.
        foreach ($pages as $page) {
            if (!$page instanceof Page) {
               // throw new \Exception('The inventory should only contain pages');
            }
        }
        
        // En cas de validité, on enregistre la collection dans une propriété privée.
        $this->pages = $pages;
    }
    
    public function __toString() {
        $output = '';
        foreach($this->pages as $page) {
            echo $page;
        }
        
        return $output;
    }
    
    public function getIterator()
    {
        return new Solid($this->pages);
    }
}
