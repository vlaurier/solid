<?php
// en php7: use Solid\Patterns\Visitor\Animals\{Titou, Ringo, Zeita, Torp, Lion, Panther, Otto, Walrus, Hippo};
use Solid\Patterns\Visitor\Animals\Monkeys;
use Solid\Patterns\Visitor\Animals\Titou;
use Solid\Patterns\Visitor\Animals\Ringo;
use Solid\Patterns\Visitor\Animals\Zeita;

use Solid\Patterns\Visitor\Animals\BigCats;
use Solid\Patterns\Visitor\Animals\Torp;
use Solid\Patterns\Visitor\Animals\Lion;
use Solid\Patterns\Visitor\Animals\Panther;

use Solid\Patterns\Visitor\Animals\MarineMammals;
use Solid\Patterns\Visitor\Animals\Otto;
use Solid\Patterns\Visitor\Animals\Walrus;

use Solid\Patterns\Visitor\Animals\Pachyderms;
use Solid\Patterns\Visitor\Animals\Solid;
use Solid\Patterns\Visitor\Animals\Hippo;

use Solid\Patterns\Visitor\Animals\All;

use Solid\Patterns\Visitor\Visitors\Veterinarian;
use Solid\Patterns\Visitor\Visitors\Trainer;

require "../../../vendor/autoload.php";
header('Content-Type: text/html; charset=utf-8');

$monkeys = new Monkeys(array(new Titou(), new Ringo(), new Zeita()));
$bigCats = new BigCats(array(new Torp(), new Lion(), new Panther()));
$marinMammals = new MarineMammals(array(new Otto, new Walrus()));
$pachyderms = new Pachyderms(array(new Solid(), new Hippo()));

$all = new All(array($monkeys, $bigCats, $marinMammals, $pachyderms));

echo "<h2>Visite du vétérinaire chez tous les animaux</h2>";
$all->accept(new Veterinarian());
echo "<h2>Visite du dresseur chez tous les animaux</h2>";
$all->accept(new Trainer());
