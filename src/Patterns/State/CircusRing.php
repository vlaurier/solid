<?php
namespace Solid\Patterns\State;

use Solid\Patterns\State\AbstractState;

class CircusRing
{
    private $state;

    public function __construct(AbstractState $state)
    {
        $this->state = $state;
    }

    public function switchingLightOn()
    {
        $this->state = $this->state->switchingLightOn();

        return $this;
    }

    public function switchingLightOff()
    {
        $this->state = $this->state->switchingLightOff();

        return $this;
    }

    public function openCurtain()
    {
        $this->state = $this->state->openCurtain();

        return $this;
    }

    public function sweepCircusRing()
    {
        $this->state = $this->state->sweepCircusRing();

        return $this;
    }

    public function __toString()
    {
        $shortClassNameWithAntiSlash = strrchr(get_class($this->state), "\\");

        return substr($shortClassNameWithAntiSlash, 1). "<br/>";
    }
}