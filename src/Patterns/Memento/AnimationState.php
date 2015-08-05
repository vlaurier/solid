<?php
namespace Solid\Patterns\Memento;

abstract class AnimationState
{
    public function throwingConfetti()
    {
        return $this;
    }

    public function throwingBalls()
    {
        return $this;
    }

    public function stopAnimation()
    {
        return $this;
    }
}