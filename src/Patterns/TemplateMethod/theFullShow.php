<?php
// src/Patterns/TemplateMethod/theFullShow.php
use Solid\Patterns\TemplateMethod\Shows\OttosCircusShow;
use Solid\Patterns\TemplateMethod\Shows\TorpsCircusShow;
use Solid\Patterns\TemplateMethod\Shows\SolidsCircusShow;

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

$OttosCircusShow = new OttosCircusShow();
$OttosCircusShow->giveAPerformance();

$TorpsCircusShow = new TorpsCircusShow();
$TorpsCircusShow->giveAPerformance();

$SolidsCircusShow = new SolidsCircusShow();
$SolidsCircusShow->giveAPerformance();
