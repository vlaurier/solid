<?php
use Solid\Patterns\Memento\CircusRing;

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

$circusRing = new CircusRing();
echo "<h2> Etat initial de la piste</h2>";
echo $circusRing;

$circusRing->sweepCircusRing();
$circusRing->rollingDrum();
echo "<h2> On déclenche le balayage et le roulement de tambour</h2>";
echo $circusRing;
$waitingAmbiance = $circusRing->createMemento();

$circusRing->lightOnCurtain();
$circusRing->turnOff();
$circusRing->throwingConfetti();
echo "<h2>Silence, lumière sur le rideau et laché de confettis.</h2>";
echo $circusRing;
$entrance = $circusRing->createMemento();

$circusRing->stopAnimation();
$circusRing->switchingLightOn();
$circusRing->playingMusic();
$circusRing->throwingBalls();
echo "<h2>Le spectacle peut commencer ! Musique ,lumière et ballons !.</h2>";
echo $circusRing;
$show = $circusRing->createMemento();

echo "<h1>Au tour de Solid maintenant</h1>";

echo "<h2>Bouton 1</h2>";
$circusRing->restoreFromMemento($waitingAmbiance);
echo $circusRing;
echo "<h2>Bouton 2</h2>";
$circusRing->restoreFromMemento($entrance);
echo $circusRing;
echo "<h2>Bouton 3</h2>";
$circusRing->restoreFromMemento($show);
echo $circusRing;
