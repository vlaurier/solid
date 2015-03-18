<?php
namespace Solid\Patterns\Iterator;

interface Aggregate
{
    /**
     * Retourne l'itérateur permettant de parcourir l'aggrégat.
     *
     * @return \Iterator
     */
    public function getIterator();
}
