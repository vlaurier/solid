<?php
namespace Solid\Patterns\Memento\Lighting;

use Solid\Patterns\Memento\LightingState;

class LightOnCurtain extends LightingState
{
    public function switchingLightOn()
    {
        return new LightsOn();
    }
}