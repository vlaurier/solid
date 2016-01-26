<?php
use Solid\Patterns\Mediator\Mediators\Gepetto;
use Solid\Patterns\Mediator\Colleagues\Torp;
use Solid\Patterns\Mediator\Colleagues\Pearl;
use Solid\Patterns\Mediator\Colleagues\Solid;

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

$gepetto = new Gepetto();

$torp = new Torp($gepetto);
$pearl = new Pearl($gepetto);
$solid = new solid($gepetto);

//$gepetto->setColleagues($torp,$pearl,$solid);

$torp->canIopenThePark();

