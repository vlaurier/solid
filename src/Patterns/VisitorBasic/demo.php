<?php
use Solid\Patterns\Visitor\Animals\Solid;
use Solid\Patterns\Visitor\Animals\Torp;
use Solid\Patterns\Visitor\Animals\Otto;
use Solid\Patterns\Visitor\Visitors\Veterinarian;

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

$solid = new Solid();
$torp = new Torp();
$otto = new Otto();

$veterinarian = new Veterinarian();

$solid->accept($veterinarian);
$torp->accept($veterinarian);
$otto->accept($veterinarian);
