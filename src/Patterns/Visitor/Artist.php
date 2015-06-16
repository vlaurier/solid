<?php

namespace Solid\Patterns\Visitor;


abstract class Artist
{
    abstract public function accept(Visitor $visitor);

    abstract public function makeYourPerformance();
}
