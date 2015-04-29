<?php
namespace Solid\Patterns\Strategy\BalanceItem;

use Solid\Patterns\Strategy\BalanceStrategy;

class Stilts implements BalanceStrategy
{
    public function cross()
    {
        echo "walk on stilts";
    }
}
