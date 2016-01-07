<?php
namespace Solid\Tests;

use Solid\Patterns\Command\Invoker;
use Solid\Patterns\Command\Commands\PutTheBallsAway;
use Solid\Patterns\Command\Commands\PutTheHoopsAway;
use Solid\Patterns\Command\Commands\PutAllTheRestAway;
use Solid\Patterns\Command\Commands\PutTheSkittlesAndUnicycleAway;
use Solid\Patterns\Command\Commands\PutTheStoolAway;
use Solid\Patterns\Command\Commands\PutTheTrapezesAway;

/**
* CommandTest
 *
 * - Tests passing the command to Otto has the expected result.
 * - The same for Torp
 * - The same for the metacommand
 * - Tests a metacommand should only contain commands.
*/

class CommandTest extends \PHPUnit_Framework_TestCase
{
    protected $invoker;

    protected $receiver;

    protected function setUp()
    {
        // A first command is passed to the invoker.
        $this->receiver = $this->getMock('Solid\Patterns\Command\Receivers\Pearl');
        $this->invoker = new Invoker(new PutTheBallsAway($this->receiver));
    }

    public function testFirstCommand()
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

    public function testSecondCommand()
    {
        $this->receiver = $this->getMock('Solid\Patterns\Command\Receivers\Torp');
        $this->invoker->setCommand(new PutTheHoopsAway($this->receiver));
        // Set up the expectation for receiver's methods to be called only once.
        $this->receiver->expects($this->once())
            ->method('comeOutOfTheDressingRoom');
        $this->receiver->expects($this->once())
            ->method('pickTheHoopsUp');
        $this->receiver->expects($this->once())
            ->method('putThemAway');
        $this->invoker->slideThePaperUnderTheDoor();
    }

    public function testMetaCommand()
    {
        $ringo = $this->getMock('Solid\Patterns\Command\Receivers\Ringo');
        $titou = $this->getMock('Solid\Patterns\Command\Receivers\Titou');
        $zeita = $this->getMock('Solid\Patterns\Command\Receivers\Zeita');

        $metaCommand = new PutAllTheRestAway(
            array(
                new PutTheSkittlesAndUnicycleAway($zeita),
                new PutTheStoolAway($ringo),
                new PutTheTrapezesAway($titou),
            )
        );
        $this->invoker->setCommand($metaCommand);

        // Set up the expectation for receiver's methods to be called only once.
        $zeita->expects($this->once())
            ->method('pickTheSkittlesAndUnicycleUp');
        $titou->expects($this->once())
            ->method('putTheTrapezesInPlace');
        $ringo->expects($this->once())
            ->method('pickTheStoolUp');
        $this->invoker->slideThePaperUnderTheDoor();
    }

    /**
     * @expectedException        \Exception
     * @expectedExceptionMessage $commands should only contain commands
     */
    public function testInvalidMetaCommandConstruction()
    {
        new PutAllTheRestAway(array(new \StdClass()));
    }
}
