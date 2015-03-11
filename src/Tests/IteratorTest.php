<?php
namespace Solid\Tests;

use Solid\Patterns\Iterator\Aggregates\Page;
use Solid\Patterns\Iterator\Aggregates\InventoryAggregate;

class IteratorTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->inventory = new InventoryAggregate(
            array(
                new Page('C2015', 'Cup', 'A cup won in 2015', 'chipped'),
                new Page('C2017', 'Cup', 'A cup won in 2017', 'brand new'),
                new Page('B1', 'Ballon', 'A red ballon', 'brand new'),
                new Page('B2', 'Ballon', 'A green ballon', 'old'),
                new Page('S1', 'Skittles', 'Some red skittles', 'brand new'),
            )
        );
    }
    
    public function getExpectedOutputs()
    {
        return array (
            array(
                array('Cup (C2015) [chipped]<br/>A cup won in 2015<hr/>'),
                array('Cup (C2017) [brand new]<br/>A cup won in 2017<hr/>'),
                array('Ballon (B1) [brand new]<br/>A red ballon<hr/>'),
                array('Ballon (B2) [old]<br/>A green ballon<hr/>'),
                array('Skittles (S1) [brand new]<br/>Some red skittles<hr/>'),
            )
        );
    }

    /**
     * @dataProvider getExpectedOutputs
     
    public function testSolidIterateOverInventory($expectedOutputs)
    {
        foreach ($this->inventory->getIterator() as $page) {
            $expectedOutput = array_shift($expectedOutputs);
            var_dump($expectedOutput);
            $this->assertEquals($expectedOutput, $page->__toString());
        }
    }*/
    
    public function testCurrent()
    {
        $result = 'Type: Cup<br/>Référence: C2015<br/>Etat: chipped<br/>Description: A cup won in 2015<br/>';
        $this->assertEquals($this->inventory->getIterator()->current()->__toString(), $result);
    }
}
