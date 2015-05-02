<?php
namespace Solid\Patterns\Strategy\CircusContext;

use Solid\Patterns\Strategy\CrossingStrategy;
use Solid\Patterns\Strategy\CrossingToolbox\Ballon;

class Torp extends Animal
{
    /**
     * @param CrossingStrategy $crossingStrategy
     * @throws \Exception
     */
    public function setCrossingStrategy(CrossingStrategy $crossingStrategy)
    {
        if ($crossingStrategy instanceof Ballon) {
            throw new \Exception('Torp can not walk on ballon');
        }
        parent::setCrossingStrategy($crossingStrategy);
    }

    protected function setName()
    {
        $this->name = 'Torp';
    }
}
