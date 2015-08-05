<?php
namespace Solid\Patterns\Memento;

use Solid\Patterns\Memento\Lighting\LightsOff;
use Solid\Patterns\Memento\Music\MusicOff;
use Solid\Patterns\Memento\Animation\AnimationOff;

class CircusRing
{
    private $lighting;

    private $music;

    private $animation;

    public function __construct(LightingState $lighting = null, MusicalState $music = null, AnimationState $animation = null)
    {
        if (null === $lighting) {
            $lighting = new LightsOff();
        }

        if (null === $music) {
            $music = new MusicOff();
        }

        if (null === $animation) {
            $animation = new AnimationOff();
        }

        $this->lighting = $lighting;
        $this->music = $music;
        $this->animation = $animation;
    }

    public function switchingLightOn()
    {
        $this->lighting = $this->lighting->switchingLightOn();

        return $this;
    }

    public function switchingLightOff()
    {
        $this->lighting = $this->lighting->switchingLightOff();

        return $this;
    }

    public function lightOnCurtain()
    {
        $this->lighting = $this->lighting->lightOnCurtain();

        return $this;
    }

    public function sweepCircusRing()
    {
        $this->lighting = $this->lighting->sweepCircusRing();

        return $this;
    }

    public function playingMusic()
    {
        $this->music = $this->music->playingMusic();

        return $this;
    }

    public function rollingDrum()
    {
        $this->music = $this->music->rollingDrum();

        return $this;
    }

    public function turnOff()
    {
        $this->music = $this->music->turnOff();

        return $this;
    }

    public function throwingConfetti()
    {
        $this->animation = $this->animation->throwingConfetti();

        return $this;
    }

    public function throwingBalls()
    {
        $this->animation = $this->animation->throwingBalls();

        return $this;
    }

    public function stopAnimation()
    {
        $this->animation = $this->animation->stopAnimation();

        return $this;
    }

    public function __toString()
    {
        $lightingNameWithAntiSlash = strrchr(get_class($this->lighting), "\\");
        $musicNameWithAntiSlash = strrchr(get_class($this->music), "\\");
        $animationNameWithAntiSlash = strrchr(get_class($this->animation), "\\");

        $output = 'Lumières: '.substr($lightingNameWithAntiSlash, 1). "<br/>";
        $output .= 'Sons: '.substr($musicNameWithAntiSlash, 1). "<br/>";
        $output .= 'Animation: '.substr($animationNameWithAntiSlash, 1). "<br/>";

        return $output;
    }

    /**
     * @return Memento
     */
    public function createMemento()
    {
        return new Memento(clone $this->lighting, clone $this->music, clone $this->animation);
    }

    public function restoreFromMemento(Memento $memento)
    {
        $this->lighting = $memento->getLighting();
        $this->music = $memento->getMusic();
        $this->animation = $memento->getAnimation();
    }
}