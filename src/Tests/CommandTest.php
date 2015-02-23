<?php
namespace Solid\Tests;

use Solid\Patterns\Command\Invoker;
use Solid\Patterns\Command\Commands\PutTheBallsAway;

/**
* CommandTest has the role of the Client in the Command Pattern
*/
class CommandTest extends \PHPUnit_Framework_TestCase
{
    protected $invoker;
    protected $receiver;
    protected function setUp()
    {
        // this is the context of the application
        $this->receiver = $this->getMock('Solid\Patterns\Command\Receivers\Otto');
        $this->invoker = new Invoker(new PutTheBallsAway($this->receiver));
    }

    public function testInvocation()
    {
        // Set up the expectation for receiver's methods to be called only once.
        $this->receiver->expects($this->once())
                 ->method('comeOutOfTheDressingRoom');
        $this->receiver->expects($this->once())
                 ->method('pickTheBallsUp');
        $this->receiver->expects($this->once())
                 ->method('putThemAway');
        $this->invoker->slideThePaperUnderTheDoor();
    }
}
