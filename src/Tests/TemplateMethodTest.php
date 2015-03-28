<?php
namespace Solid\Tests;

use Solid\Patterns\TemplateMethod\Shows\OttosCircusShow;

class TemplateMethodTest extends \PHPUnit_Framework_TestCase
{
    public function testOttosCircusTrainingShow()
    {
        $ottosCircusShow = $this->getMock('Solid\Patterns\TemplateMethod\Shows\OttosCircusShow');

        $ottosCircusShow->method('isDday')
                        ->willReturn(false);
        $ottosCircusShow->method('getCharacterName')
                        ->willReturn('Otto');

        $this->expectOutputRegex("#Otto entre et dépose son matériel.<br/>Elle salue les spectateurs par un tour de piste en envoyant des baisers.<br/>Puis elle réalise son numéro avec les ballons, toujours aussi exceptionnel.<br/>Le spectacle se termine par une belle révérence dans les règles de l'art.<br/>La sortie se fait sous les applaudissements des autres animaux.<br/><hr/>#");
        $ottosCircusShow->giveAPerformance();
    }

    public function testOttosCircusDdayShow()
    {
        $ottosCircusShow = $this->getMock('Solid\Patterns\TemplateMethod\Shows\OttosCircusShow');

        $ottosCircusShow->method('isDday')
            ->willReturn(true);
        $ottosCircusShow->method('getCharacterName')
            ->willReturn('Otto');

        $this->expectOutputRegex("#Musique ! Lumières ! Le prochain artiste va apparaître...<br/>Otto entre et dépose son matériel.<br/>Elle salue les spectateurs par un tour de piste en envoyant des baisers.<br/>Puis elle réalise son numéro avec les ballons, toujours aussi exceptionnel.<br/>Le spectacle se termine par une belle révérence dans les règles de l'art.<br/>Les confettis accompagnent la sortie de l'otarie.<br/><hr/>#");
        $ottosCircusShow->giveAPerformance();
    }
}


