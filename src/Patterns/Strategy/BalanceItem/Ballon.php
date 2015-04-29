<?php
namespace Solid\Patterns\Strategy\BalanceItem;

use Solid\Patterns\Strategy\BalanceStrategy;

class Ballon implements BalanceStrategy
{
    public function cross()
    {
        echo "cross with ballon";
    }
}
