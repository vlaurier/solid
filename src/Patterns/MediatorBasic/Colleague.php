<?php
namespace Solid\Patterns\MediatorBasic;

abstract class Colleague
{
    private $mediator;

    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }
    abstract public function __toString();

    public function canIOpen():bool
    {
        echo $this. ': Est-ce je peux ouvrir ?<br/>';
        return $this->mediator->respondTo($this);
    }

    public function isReady():bool
    {
        return (bool)random_int(0,3);
    }
}