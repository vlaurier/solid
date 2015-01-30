<?php
namespace Solid\Patterns\Iterator\Items;

use Solid\Patterns\Iterator\Iterators\Torp;

class StoreRoom 
{
    private $shelves;
    
    public function __construct(array $shelves)
    {
        // Pour chaque étagère
        foreach ($shelves as $shelf) {
            // On vérifie qu'elle est representée comme un tableau...
            if (!is_array($shelf)) {
                throw new \Exception('A shelf should be represented as an array');
            }
            // ... qui ne contient que des articles
            foreach ($shelf as $item) {
                if (!$item instanceof Item) {
                    throw new \Exception('A shelf should only contain items');
                }
            }
        }
        
        // En cas de validité, on enregistre la collection dans une propriété privée.
        $this->shelves = $shelves;
    }
    
    public function __toString() {
        $output = '';
        foreach($this->shelves as $shelf) {
            echo implode(',', $shelf).'<br/>';
        }
        
        return $output;
    }
    
    public function getIterator()
    {
        return new Torp($this->shelves);
    }
}
