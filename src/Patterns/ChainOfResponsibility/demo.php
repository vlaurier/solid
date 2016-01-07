<?php
use Solid\Patterns\ChainOfResponsibility\Artists\Solid;
use Solid\Patterns\ChainOfResponsibility\Artists\Torp;
use Solid\Patterns\ChainOfResponsibility\Artists\Pearl;
use Solid\Patterns\ChainOfResponsibility\Artists\Gepetto;
use Solid\Patterns\ChainOfResponsibility\Client;

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

// On crée tous les artistes
$solid = new Solid();
$torp = new Torp();
$pearl = new Pearl();
$gepetto = new Gepetto();

// Solid indique qu'Pearl est derrière lui.
$solid->setNext($pearl);
// Pearl indique que Torp est derrière elle.
$pearl->setNext($torp);

$client = new Client($gepetto);
// Gepetto demande à Solid de passer à travers le cerceau
$result = $client->handleRequest($solid, 'cerceau');

displayResult($result);

// Gepetto demande à Solid de monter sur le tabouret
$result = $client->handleRequest($solid, 'tabouret');

displayResult($result);

// Gepetto demande à Solid de jongler avec des quilles
$result = $client->handleRequest($solid, 'quilles');

displayResult($result);

function displayResult($result)
{
    if ($result) {
        echo '<p>La requête a été gérée</p>';
    } else {
        echo "<p>La requête n'a pas été gérée</p>";
    }
}


