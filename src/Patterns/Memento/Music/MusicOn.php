<?php
namespace Solid\Patterns\Memento\Music;

use Solid\Patterns\Memento\MusicalState;

class MusicOn extends MusicalState
{
    public function turnOff()
    {
        return new MusicOff();
    }
}