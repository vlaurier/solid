<?php
namespace Solid\Patterns\State;

abstract class AbstractState
{
    public function switchingLightOn()
    {
        return $this;
    }

    public function switchingLightOff()
    {
        return $this;
    }

    public function openCurtain()
    {
        return $this;
    }

    public function sweepCircusRing()
    {
        return $this;
    }
}