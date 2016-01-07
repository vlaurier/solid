<?php
// src/Patterns/TemplateMethod/demo.php
use Solid\Patterns\TemplateMethod\CircusShows\{PearlsCircusShow,TorpsCircusShow,SolidsCircusShow};

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

$PearlsCircusShow = new PearlsCircusShow();
$PearlsCircusShow->performOnStage();

$TorpsCircusShow = new TorpsCircusShow();
$TorpsCircusShow->performOnStage();

$SolidsCircusShow = new SolidsCircusShow();
$SolidsCircusShow->performOnStage();
