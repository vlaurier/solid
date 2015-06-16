<?php

namespace Solid\Patterns\Visitor\Circus;

use Solid\Patterns\Visitor\Artist;
use Solid\Patterns\Visitor\Visitor;

class AnimalsGroup extends Artist
{
    private $categories;

    public function makeYourPerformance()
    {
        foreach ($this->categories as $category) {
            $category->makeYourPerformance();
        }
    }

    public function accept(Visitor $visitor)
    {

    }
}