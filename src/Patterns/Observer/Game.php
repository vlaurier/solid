<?php

namespace Solid\Patterns\Observer;


class Game implements \SplSubject
{
    private $number;
    private $observers = array();

    public function attach(\SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(\SplObserver $observer)
    {
        $key = array_search($observer, $this->observers, true);
        if (false !== $key) {
            unset($this->observers[$key]);
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function turn()
    {
        $this->number = rand(1, 49);
        $this->notify();
    }

    public function getNumber()
    {
        return $this->number;
    }
}
