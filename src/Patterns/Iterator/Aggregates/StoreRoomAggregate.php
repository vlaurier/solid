<?php
namespace Solid\Patterns\Iterator\Aggregates;

use Solid\Patterns\Iterator\Iterators\AppendTorp;
use Solid\Patterns\Iterator\Iterators\FilterTorp;
use Solid\Patterns\Iterator\Iterators\Torp;

class StoreRoomAggregate implements \IteratorAggregate
{
    private $shelves;
    
    public function __construct(array $shelves)
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
    
    public function getIterator()
    {
        return new Torp($this->shelves);
        //return new FilterTorp(new Torp($this->shelves), 'Ballon');
        //return new AppendTorp($this->shelves, 'Ballon');
    }

    public function getGenerator()
    {
        foreach ($this->shelves as $shelf) {
            foreach ($shelf as $item) {
                yield $item;
            }
        }
    }
}
