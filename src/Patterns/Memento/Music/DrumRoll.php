<?php
namespace Solid\Patterns\Memento\Music;

use Solid\Patterns\Memento\MusicalState;

class DrumRoll extends MusicalState
{
    public function turnOff()
    {
        return new MusicOff();
    }
}