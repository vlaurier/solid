<?php
namespace Solid\Patterns\Mediator;

class Colleague
{
    protected $mediator;

    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }

    public function isReady()
    {
        return (bool)random_int(0,3);
    }
}