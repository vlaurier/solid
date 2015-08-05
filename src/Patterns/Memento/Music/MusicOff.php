<?php
namespace Solid\Patterns\Memento\Music;

use Solid\Patterns\Memento\MusicalState;

class MusicOff extends MusicalState
{
    public function playingMusic()
    {
        return new MusicOn();
    }

    public function rollingDrum()
    {
        return new DrumRoll();
    }
}