<?php
// src/Patterns/TemplateMethod/theFullShow.php
use Solid\Patterns\TemplateMethod\CircusShows\OttosCircusShow;
use Solid\Patterns\TemplateMethod\CircusShows\TorpsCircusShow;
use Solid\Patterns\TemplateMethod\CircusShows\SolidsCircusShow;

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

$OttosCircusShow = new OttosCircusShow();
$OttosCircusShow->giveAPerformance();

$TorpsCircusShow = new TorpsCircusShow();
$TorpsCircusShow->giveAPerformance();

$SolidsCircusShow = new SolidsCircusShow();
$SolidsCircusShow->giveAPerformance();
