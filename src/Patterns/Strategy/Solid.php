<?php
namespace Solid\Patterns\Strategy;

class Solid implements MusicalStrategy, CrossingStrategy
{
    /**
     * @var CrossingStrategy $crossingStrategy
     */
    private $crossingStrategy;

    /**
     * @var MusicalStrategy $musicalStrategy
     */
    private $musicalStrategy;

    /**
     * @param CrossingStrategy $crossingStrategy
     */
    public function setcrossingStrategy(CrossingStrategy $crossingStrategy)
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

    public function cross($animal = null)
    {
        if (null === $this->crossingStrategy) {
            throw new \Exception('You should set a balance strategy before crossing');
        }

        return $this->crossingStrategy->cross();
    }

    public function play()
    {
        if (null === $this->musicalStrategy) {
            throw new \Exception('You should set a musical strategy before playing');
        }

        return $this->musicalStrategy->play();
    }
}
