<?php
namespace Solid\Patterns\Strategy\BalanceItem;

use Solid\Patterns\Strategy\BalanceStrategy;

class Unicycle implements BalanceStrategy
{
    public function cross()
    {
        echo "cross with unicycle";
    }
}
