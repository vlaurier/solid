<?php
namespace Solid\Tests;
use Solid\Patterns\TemplateMethod\OttosShow;

class TemplateMethodTest extends \PHPUnit_Framework_TestCase
{
    public function testOttosShow()
    {
        $ottosShow = new OttosShow();
        $this->expectOutputRegex('#Otto fait le spectacle#');
        $ottosShow->giveAPerformance();
    }
}


