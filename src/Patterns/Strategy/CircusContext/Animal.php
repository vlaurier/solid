<?php
namespace Solid\Patterns\Strategy\CircusContext;

use Solid\Patterns\Strategy\BalanceStrategy;
use Solid\Patterns\Strategy\MusicalStrategy;

abstract class Animal implements MusicalStrategy, BalanceStrategy
{
    /**
     * @var BalanceStrategy $balanceStrategy
     */
    private $balanceStrategy;

    /**
     * @var MusicalStrategy $musicalStrategy
     */
    private $musicalStrategy;

    /**
     * @param BalanceStrategy $balanceStrategy
     */
    public function setBalanceStrategy(BalanceStrategy $balanceStrategy)
    {
        $this->$balanceStrategy = $balanceStrategy;
    }

    /**
     * @param MusicalStrategy $musicalStrategy
     */
    public function setMusicalStrategy(MusicalStrategy $musicalStrategy)
    {
        $this->$musicalStrategy = $musicalStrategy;
    }
}
