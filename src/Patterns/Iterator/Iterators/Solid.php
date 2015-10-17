<?php
namespace Solid\Patterns\Iterator\Iterators;

use Solid\Patterns\Iterator\Aggregates\Page;

class Solid implements \Iterator
{
    private $pages;

    public function __construct(array $pages)
    {
        $this->pages = $pages;
    }

   /**
    * Retourne la page courante
    */
    public function current ()
    {
        return current($this->pages);
    }

   /**
    * Se déplace sur la page suivante
    */
    public function next ()
    {
        next($this->pages);
    }

   /**
    * Retourne la clé de la page courante
    */
    public function key ()
    {
        return key($this->pages);
    }

   /**
    * Vérifie si la position courante est valide
    */
    public function valid ()
    {
        return $this->current() instanceof Page;
    }

   /**
    * Replace l'itérateur sur le premier élément
    */
    public function rewind ()
    {
        reset($this->pages);
    }
}
