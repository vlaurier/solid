<?php
namespace Solid\Patterns\Strategy\CircusContext;

use Solid\Patterns\Strategy\CrossingStrategy;
use Solid\Patterns\Strategy\CrossingToolbox\Unicycle;

class Torp extends Animal
{
    /**
     * @param CrossingStrategy $crossingStrategy
     * @throws \Exception
     */
    public function setCrossingStrategy(CrossingStrategy $crossingStrategy)
    {
        if ($crossingStrategy instanceof Unicycle) {
            throw new \Exception('Torp can not cross with unicycle');
        }
        parent::setCrossingStrategy($crossingStrategy);
    }

    public function getName()
    {
        return 'Torp le tigre';
    }
}