<?php
// src/Patterns/Command/Client.php
namespace Solid\Patterns\Command;

use Solid\Patterns\Command\Receivers\Otto;
use Solid\Patterns\Command\Receivers\Torp;
use Solid\Patterns\Command\Receivers\Titou;
use Solid\Patterns\Command\Receivers\Zeita;
use Solid\Patterns\Command\Receivers\Ringo;
use Solid\Patterns\Command\Commands\PutTheBallsAway;
use Solid\Patterns\Command\Commands\PutTheHoopsAway;
use Solid\Patterns\Command\Commands\PutTheSkittlesAndUnicycleAway;
use Solid\Patterns\Command\Commands\PutTheStoolAway;
use Solid\Patterns\Command\Commands\PutTheTrapezesAway;
use Solid\Patterns\Command\Commands\PutAllTheRestAway;

// For the following two lines of code, see explanation in the introduction (p ).
require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

// First command designated to Otto
$receiver1 = new Otto();
$command1 = new PutTheBallsAway($receiver1);
$invoker = new Invoker($command1);
$invoker->slideThePaperUnderTheDoor();

// The second command for Torp
$receiver2 = new Torp();
$command2 = new PutTheHoopsAway($receiver2);
$invoker->setCommand($command2);
$invoker->slideThePaperUnderTheDoor();

// Gepetto then writes 3 commands which he sends as a whole.

$receiver3 = new Titou();
$receiver4 = new Zeita();
$receiver5 = new Ringo();

$commands[] = new PutTheTrapezesAway($receiver3);
$commands[] = new PutTheSkittlesAndUnicycleAway($receiver4);
$commands[] = new PutTheStoolAway($receiver5);

$metaCommand = new PutAllTheRestAway($commands);
$invoker->setCommand($metaCommand);
$invoker->slideThePaperUnderTheDoor();
