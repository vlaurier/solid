<?php
namespace Solid\Patterns\Iterator\Iterators;

use Solid\Patterns\Iterator\Items\Page;

class Solid implements \Iterator
{
      private $pages;
      
      public function __construct(array $pages)
      {
          $this->pages = $pages;
      }
       /**
        * Return the current element
        * 
        * @return mixed Can return any type.
        */
       public function current ()
       {
           return current($this->pages);
       }

       /**
        * Move forward to next element
        * 
        * @return void Any returned value is ignored.
        */
       public function next ()
       {
           next($this->pages);
       }

       /**
        * Return the key of the current element
        *
        * @return scalar scalar on success, or <b>NULL</b> on failure.
        */
       public function key ()
       {
           return key($this->pages);
       }

       /**
        * (PHP 5 &gt;= 5.0.0)<br/>
        *
        * @return boolean The return value will be casted to boolean and then evaluated.
        * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
        */
       public function valid ()
       {
           return ($this->pages[key($this->pages)]) instanceof Page;
       }

       /**
        * Rewind the Iterator to the first element
        *
        * @return void Any returned value is ignored.
        */
       public function rewind ()
       {
           reset($this->pages);
       }
}
