<?php
namespace Solid\Patterns\Strategy\CircusContext;

use Solid\Patterns\Strategy\CrossingStrategy;
use Solid\Patterns\Strategy\MusicalStrategy;
use Solid\Patterns\Strategy\MusicalStrategy\NoMusicalStrategy;
use Solid\Patterns\Strategy\CrossingToolbox\NoCrossingStrategy;

abstract class Animal
{
    /**
     * La propriété pour stocker la stratégie pour traverser
     * @var CrossingStrategy $crossingStrategy
     */
    private $crossingStrategy;

    /**
     * La propriété pour stocker la stratégie pour jouer de la musique
     * @var MusicalStrategy $musicalStrategy
     */
    private $musicalStrategy;

    /**
     * @param CrossingStrategy $crossingStrategy
     * @param MusicalStrategy $musicalStrategy
     */
    public function __construct(
        CrossingStrategy $crossingStrategy = null,
        MusicalStrategy $musicalStrategy = null
    ) {
        $this->crossingStrategy = (null === $crossingStrategy)
            ? new NoCrossingStrategy()
            : $crossingStrategy;
        $this->musicalStrategy = (null === $musicalStrategy)
            ? new NoMusicalStrategy()
            : $musicalStrategy;
    }

    /**
     * La méthode permettant de choisir la stratégie pour traverser
     * @param CrossingStrategy $crossingStrategy
     */
    public function setCrossingStrategy(CrossingStrategy $crossingStrategy)
    {
        $this->crossingStrategy = $crossingStrategy;
        $this->musicalStrategy = new NoMusicalStrategy();
    }

    /**
     * La méthode permettant de choisir la stratégie pour jouer de la musique
     * @param MusicalStrategy $musicalStrategy
     */
    public function setMusicalStrategy(MusicalStrategy $musicalStrategy)
    {
        $this->musicalStrategy = $musicalStrategy;
        $this->crossingStrategy = new NoCrossingStrategy();
    }

    /**
     * Quand Solid traverse, on s'assure qu'il a choisit un article d'équilibre,
     * autrement dit une stratégie pour traverser.
     * Il s'en sert ensuite pour traverser.
     */
    public function cross()
    {
        if (null === $this->crossingStrategy) {
            throw new \Exception('Please, set a crossing strategy');
        }

        return $this->crossingStrategy->cross($this);
    }
    /**
     * Quand Solid joue de la musique, on s'assure qu'il a choisit un instrument,
     * autrement dit une stratégie pour jouer de la musique.
     * Il s'en sert ensuite pour jouer.
     */
    public function play()
    {
        if (null === $this->musicalStrategy) {
            throw new \Exception('Please, set a musical strategy');
        }

        return $this->musicalStrategy->play($this);
    }

    /**
     * Retourne le nom de l'animal.
     *
     * @return string
     */
    abstract public function getName();
}