<?php

namespace Solid\Patterns\Interpreter;

class Context
{
    private $animals;
    private $items;
    private $remainingItems;

    public function __construct(array $animals, array $items)
    {
        $this->animals = $animals;
        $this->items = $items;
        $this->remainingItems = $items;
    }

    public function getNextItem()
    {
        if (null === $nextItem = array_shift($this->remainingItems)) {
            $items = $this->items;
            $this->remainingItems = $items;

            return array_shift($this->remainingItems);
        }

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