<?php
namespace Solid\Patterns\Mediator;

abstract class Colleague
{
    protected $mediator;

    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }

    public function isReady():bool
    {
        return (bool)random_int(0,3);
    }
}