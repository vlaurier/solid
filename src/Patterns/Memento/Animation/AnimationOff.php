<?php
namespace Solid\Patterns\Memento\Animation;

use Solid\Patterns\Memento\AnimationState;

class AnimationOff extends AnimationState
{
    public function throwingConfetti()
    {
        return new Confetti();
    }

    public function throwingBalls()
    {
        return new Balls();
    }
}