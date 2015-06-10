<?php
use Solid\Patterns\ChainOfResponsibility\Artists\Solid;
use Solid\Patterns\ChainOfResponsibility\Artists\Torp;
use Solid\Patterns\ChainOfResponsibility\Artists\Otto;
use Solid\Patterns\ChainOfResponsibility\Client;

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

// On crée tous les artistes
$solid = new Solid();
$torp = new Torp();
$otto = new Otto();

// Solid indique qu'Otto est derrière lui.
$solid->setNext($otto);
// Otto indique que Torp est derrière elle.
$otto->setNext($torp);

$client = new Client();
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


