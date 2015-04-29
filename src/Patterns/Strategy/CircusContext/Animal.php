<?php
namespace Solid\Patterns\Strategy\CircusContext;

use Solid\Patterns\Strategy\CrossingStrategy;
use Solid\Patterns\Strategy\MusicalStrategy;
use Solid\Patterns\Strategy\CrossingToolbox\NoCrossingStrategy;
use Solid\Patterns\Strategy\MusicalStrategy\NoMusicalStrategy;

abstract class Animal
{
    /**
     * @var CrossingStrategy $crossingStrategy
     */
    protected $crossingStrategy;

    /**
     * @var MusicalStrategy $musicalStrategy
     */
    protected $musicalStrategy;

    /**
     * @var string the animal name
     */
    protected $name;

    /**
     * @param $name
     * @param CrossingStrategy $crossingStrategy
     * @param MusicalStrategy $musicalStrategy
     */
    public function __construct(
        $name,
        CrossingStrategy $crossingStrategy = null,
        MusicalStrategy $musicalStrategy = null
    ) {
        $this->name = $name;
        if (null === $crossingStrategy) {
            $this->crossingStrategy = new NoCrossingStrategy();
        }
        if (null === $musicalStrategy) {
            $this->musicalStrategy = new NoMusicalStrategy();
        }
    }

    /**
     * @param CrossingStrategy $crossingStrategy
     */
    public function setCrossingStrategy(CrossingStrategy $crossingStrategy)
    {
        $this->crossingStrategy = $crossingStrategy;
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
        return $this->crossingStrategy->cross($this);
    }

    public function play()
    {
        return $this->musicalStrategy->play($this);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
