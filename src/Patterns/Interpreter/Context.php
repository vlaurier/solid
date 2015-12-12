<?php

namespace Solid\Patterns\Interpreter;

class Context
{
    private $animals;
    private $items;

    public function __construct(array $animals, array $items)
    {
        $this->animals = $animals;
        $this->items = $items;
    }

    public function getNextItem()
    {
        $nextItem = array_shift($this->items);
        array_push($this->items, $nextItem);

        return $nextItem;
    }

    public function call($animal)
    {
        if (!in_array($animal, $this->animals)) {
            throw new \Exception("$animal n\'est pas sur la piste.");
        }

        return $animal;
    }
}