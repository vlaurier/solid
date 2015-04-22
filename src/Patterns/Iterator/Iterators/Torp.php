<?php
namespace Solid\Patterns\Iterator\Iterators;

use Solid\Patterns\Iterator\Aggregates\Item;

class Torp implements \Iterator
{
    private $shelves;
      
    private $currentShelf;
      
    public function __construct(array $shelves)
    {
        $this->shelves = $shelves;
        $this->currentShelf = current($this->shelves);
    }
      
    public function current ()
    {
         return current($this->currentShelf);
    }

    public function next ()
    {
        next($this->currentShelf);

        if (null === key($this->currentShelf)) {
            next($this->shelves);
            if (null !== key($this->shelves)) {
                $this->currentShelf = current($this->shelves);
            }
        }
    }

    public function key ()
    {
        return key($this->currentShelf);
    }

    public function valid ()
    {
        return $this->current() instanceof Item;
    }

    public function rewind ()
    {
        reset($this->shelves);
        $this->currentShelf = current($this->shelves);
        reset($this->currentShelf);
    }
}
