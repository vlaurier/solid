<?php
use \Solid\Patterns\Strategy\Solid;
use Solid\Patterns\Strategy\BalanceItem\Ballon;

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

$solid = new Solid();

$solid->setBalanceStrategy(new Ballon());
$solid->cross();
