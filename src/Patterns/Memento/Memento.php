<?php
namespace Solid\Patterns\Memento;

class Memento
{
    private $lighting;
    private $music;
    private $animation;

    public function __construct(LightingState $lighting, MusicalState $music, AnimationState $animation)
    {
        $this->lighting = $lighting;
        $this->music = $music;
        $this->animation = $animation;
    }

    public function getLighting()
    {
        return $this->lighting;
    }

    public function getMusic()
    {
        return $this->music;
    }

    public function getAnimation()
    {
        return $this->animation;
    }
}