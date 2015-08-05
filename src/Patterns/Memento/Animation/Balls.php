<?php
namespace Solid\Patterns\Memento\Animation;

use Solid\Patterns\Memento\AnimationState;

class Balls extends AnimationState
{
    public function stopAnimation()
    {
        return new AnimationOff();
    }
}