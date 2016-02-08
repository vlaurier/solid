<?php
use Solid\Patterns\MediatorBasic\Mediators\Gepetto;
use Solid\Patterns\MediatorBasic\Colleagues\Torp;

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

$gepetto = new Gepetto();
$torp = new Torp($gepetto);

$torp->canIOpen();