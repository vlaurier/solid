<?php
namespace Solid\Tests;

class TemplateMethodTest extends \PHPUnit_Framework_TestCase
{
    public function testPearlsCircusTrainingShow()
    {
        $pearlsCircusShow = $this->getMock('Solid\Patterns\TemplateMethod\CircusShows\PearlsCircusShow');

        $pearlsCircusShow->method('isDday')
                        ->willReturn(false);
        $pearlsCircusShow->method('getCharacterName')
                        ->willReturn('Pearl');

        $this->expectOutputRegex("#Pearl entre et dépose son matériel.<br/>Elle salue les spectateurs par un tour de piste en envoyant des baisers.<br/>Puis elle réalise son numéro avec les ballons, toujours aussi exceptionnel.<br/>Le spectacle se termine par une belle révérence dans les règles de l'art.<br/>La sortie se fait sous les applaudissements des autres animaux.<br/><hr/>#");
        $pearlsCircusShow->performOnStage();
    }

    public function testPearlsCircusDdayShow()
    {
        $pearlsCircusShow = $this->getMock('Solid\Patterns\TemplateMethod\CircusShows\PearlsCircusShow');

        $pearlsCircusShow->method('isDday')
            ->willReturn(true);
        $pearlsCircusShow->method('getCharacterName')
            ->willReturn('Pearl');

        $this->expectOutputRegex("#Musique ! Lumières ! Le prochain artiste va apparaître...<br/>Pearl entre et dépose son matériel.<br/>Elle salue les spectateurs par un tour de piste en envoyant des baisers.<br/>Puis elle réalise son numéro avec les ballons, toujours aussi exceptionnel.<br/>Le spectacle se termine par une belle révérence dans les règles de l'art.<br/>Les confettis accompagnent la sortie de l'otarie.<br/><hr/>#");
        $pearlsCircusShow->performOnStage();
    }
}


