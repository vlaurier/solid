<?php
namespace Solid\Patterns\Strategy;

use Solid\Patterns\Strategy\BalanceStrategy;
use Solid\Patterns\Strategy\MusicalStrategy;

class Solid implements MusicalStrategy, BalanceStrategy
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
        $this->balanceStrategy = $balanceStrategy;
    }

    /**
     * @param MusicalStrategy $musicalStrategy
     */
    public function setMusicalStrategy(MusicalStrategy $musicalStrategy)
    {
        $this->musicalStrategy = $musicalStrategy;
    }

    public function cross()
    {
        if (null === $this->balanceStrategy) {
            throw new \Exception('You should set a balance strategy before crossing');
        }

        $this->balanceStrategy->cross();
    }

    public function play()
    {
        if (null === $this->musicalStrategy) {
            throw new \Exception('You should set a musical strategy before playing');
        }

        $this->musicalStrategy->play();
    }
}
