<?php
use Solid\Patterns\TemplateMethod\OttosCircusShow;
use Solid\Patterns\TemplateMethod\TorpsCircusShow;
use Solid\Patterns\TemplateMethod\SolidsCircusShow;

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

$OttosCircusShow = new OttosCircusShow();
$OttosCircusShow->giveAPerformance();

$TorpsCircusShow = new TorpsCircusShow();
$TorpsCircusShow->giveAPerformance();

$SolidsCircusShow = new SolidsCircusShow();
$SolidsCircusShow->giveAPerformance();
