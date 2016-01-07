<?php
namespace Solid\Patterns\Visitor;

use Solid\Patterns\Visitor\Animals\Titou;
use Solid\Patterns\Visitor\Animals\Ringo;
use Solid\Patterns\Visitor\Animals\Zeita;
use Solid\Patterns\Visitor\Animals\Torp;
use Solid\Patterns\Visitor\Animals\Panther;
use Solid\Patterns\Visitor\Animals\Lion;
use Solid\Patterns\Visitor\Animals\Pearl;
use Solid\Patterns\Visitor\Animals\Walrus;
use Solid\Patterns\Visitor\Animals\Solid;
use Solid\Patterns\Visitor\Animals\Hippo;

interface Visitor
{
    public function visitTitou(Titou $titou);
    public function visitRingo(Ringo $ringo);
    public function visitZeita(Zeita $zeita);
    public function visitTorp(Torp $torp);
    public function visitPanther(Panther $panther);
    public function visitLion(Lion $lion);
    public function visitPearl(Pearl $pearl);
    public function visitWalrus(Walrus $walrus);
    public function visitSolid(Solid $solid);
    public function visitHippo(Hippo $hippo);
}
