<?php
namespace Solid\Patterns\Visitor;

abstract class AnimalsGroup implements Artist {

    private $artists;

    public function __construct(array $artists)
    {
        foreach ($artists as $artist) {
            if (!$artist instanceof Artist) {
                throw new \InvalidArgumentException('An animals group should only contain artists');
            }
        }
        $this->artists = $artists;
    }

    public function accept(Visitor $visitor)
    {
        foreach ($this->artists as $artist) {
            $artist->accept($visitor);
        }
    }

    public function makeYourPerformance()
    {
        foreach ($this->artists as $artist) {
            $artist->makeYourPerformance();
        }
    }
}