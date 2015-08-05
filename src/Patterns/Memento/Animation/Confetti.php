<?php
namespace Solid\Patterns\Memento\Animation;

use Solid\Patterns\Memento\AnimationState;

class Confetti extends AnimationState
{
    public function stopAnimation()
    {
        return new AnimationOff();
    }
}