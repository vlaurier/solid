<?php

namespace Solid\Patterns\Interpreter;

class Context
{
    private $items;
    private $remainingItems;

    public function __construct(array $items)
    {
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
}