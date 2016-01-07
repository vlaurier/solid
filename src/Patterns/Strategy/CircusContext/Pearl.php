<?php
namespace Solid\Patterns\Strategy\CircusContext;

use Solid\Patterns\Strategy\CrossingStrategy;

class Pearl extends Animal
{
    /**
     * @param CrossingStrategy $crossingStrategy
     * @throws \Exception
     */
    public function setCrossingStrategy(CrossingStrategy $crossingStrategy)
    {
        throw new \Exception('Pearl can not cross');
    }

    public function getName()
    {
        return 'Pearl';
    }
}
