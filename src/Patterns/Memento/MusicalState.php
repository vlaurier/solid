<?php
namespace Solid\Patterns\Memento;

abstract class MusicalState
{
    public function playingMusic()
    {
        return $this;
    }

    public function rollingDrum()
    {
        return $this;
    }

    public function turnOff()
    {
        return $this;
    }
}