<?php
namespace Solid\Patterns\Memento\Lighting;

use Solid\Patterns\Memento\LightingState;

class LightsOn extends LightingState
{
    public function switchingLightOff()
    {
        return new LightsOff();
    }
}