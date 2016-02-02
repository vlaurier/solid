<?php
use Solid\Patterns\Mediator\Mediators\Gepetto;
use Solid\Patterns\Mediator\Colleagues\{Torp, Pearl, Solid};

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

$gepetto = new Gepetto();
$torp = new Torp($gepetto);
$pearl = new Pearl($gepetto);
$solid = new Solid($gepetto);

$torp->canIOpen();