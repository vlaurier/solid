<?php
namespace Solid\Patterns\Memento;

abstract class LightingState
{
    public function switchingLightOn()
    {
        return $this;
    }

    public function switchingLightOff()
    {
        return $this;
    }

    public function lightOnCurtain()
    {
        return $this;
    }

    public function sweepCircusRing()
    {
        return $this;
    }
}