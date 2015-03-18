<?php
namespace Solid\Patterns\Iterator\Iterators;

use Solid\Patterns\Iterator\StoreRoomIterator;
use Solid\Patterns\Iterator\Aggregates\Item;

class Torp implements \Iterator, StoreRoomIterator
{
    private $shelves;
      
    private $currentShelf;
      
    public function __construct(array $shelves)
    {
        $this->shelves = $shelves;
        $this->currentShelf = current($this->shelves);
    }
      
   /**
    * Return the current element
    *
    * @return mixed Can return any type.
    */
    public function current ()
    {
         return current($this->currentShelf);
    }

   /**
    * Move forward to next element
    *
    * @return void Any returned value is ignored.
    */
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

   /**
    * Return the key of the current element
    *
    * @return scalar scalar on success, or <b>NULL</b> on failure.
    */
    public function key ()
    {
        return key($this->currentShelf);
    }

   /**
    * (PHP 5 &gt;= 5.0.0)<br/>
    *
    * @return boolean The return value will be casted to boolean and then evaluated.
    * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
    */
    public function valid ()
    {
        return $this->current() instanceof Item;
    }

   /**
    * Rewind the Iterator to the first element
    *
    * @return void Any returned value is ignored.
    */
    public function rewind ()
    {
        reset($this->shelves);
        $this->currentShelf = current($this->shelves);
        reset($this->currentShelf);
    }
}
