<?php
namespace Solid\Patterns\Strategy\CircusContext;

use Solid\Patterns\Strategy\CrossingStrategy;

class Otto extends Animal
{
    /**
     * @param CrossingStrategy $crossingStrategy
     * @throws \Exception
     */
    public function setCrossingStrategy(CrossingStrategy $crossingStrategy)
    {
        throw new \Exception('Otto can not cross');
    }

    protected function setName()
    {
        $this->name = 'Otto';
    }
}
