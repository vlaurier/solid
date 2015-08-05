<?php
use Solid\Patterns\State\CircusRing;
use Solid\Patterns\State\States\LightsOn;

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

$circusRing = new CircusRing(new LightsOn());

echo $circusRing;

$circusRing->switchingLightOff();

echo $circusRing;

$circusRing->sweepCircusRing();

echo $circusRing;

$circusRing->openCurtain();

echo $circusRing;

$circusRing->switchingLightOn();

echo $circusRing;

$circusRing->sweepCircusRing();

echo $circusRing;

