<?php
use Solid\Patterns\Mediator2\Mediators\Gepetto;
use Solid\Patterns\Mediator2\Colleagues\Torp;
use Solid\Patterns\Mediator2\Colleagues\Pearl;
use Solid\Patterns\Mediator2\Colleagues\Solid;

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

$gepetto = new Gepetto();
$torp = new Torp($gepetto);
$pearl = new Pearl($gepetto);
$solid = new Solid($gepetto);

$torp->canIOpen();
echo '<hr/>';
$pearl->canIOpen();
echo '<hr/>';
$solid->canIOpen();