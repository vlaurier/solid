<?php
namespace Solid\Patterns\Iterator;

use Solid\Patterns\Iterator\Aggregates\Item;

abstract class StoreRoomAggregate implements \IteratorAggregate
{
    protected $shelves;
    
    final public function __construct(array $shelves)
    {
        // Pour chaque étagère
        foreach ($shelves as $shelf) {
            // On vérifie qu'elle est representée comme un tableau...
            if (!is_array($shelf)) {
                throw new \Exception('A shelf should be an array');
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
    
    abstract public function getIterator();
}
