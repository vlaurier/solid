<?php
namespace Solid\Patterns\Strategy\CircusContext;

use Solid\Patterns\Strategy\CrossingStrategy;
use Solid\Patterns\Strategy\CrossingToolbox\Ballon;

class Solid extends Animal
{
    /**
     * @param CrossingStrategy $crossingStrategy
     * @throws \Exception
     */
    public function setCrossingStrategy(CrossingStrategy $crossingStrategy)
    {
        if ($crossingStrategy instanceof Ballon) {
            throw new \Exception('Solid can not walk on ballon');
        }
        parent::setCrossingStrategy($crossingStrategy);
    }

    public function getName()
    {
        return 'Solid le magnifique';
    }
}