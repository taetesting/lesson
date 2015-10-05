<?php

use Zinio\Solid\LiskovSubstitution\Rectangle;
use Zinio\Solid\LiskovSubstitution\Square;
use Zinio\Solid\LiskovSubstitution\Client;

class LspTest extends PHPUnit_Framework_TestCase {
 
    function testRectangleArea()
    {
        $r = new Rectangle();
        $c = new Client();
        $this->assertTrue($c->areaVerifier($r));
    }

    function testSquareArea()
    {
        $r = new Square();
        $c = new Client();
        $this->assertTrue($c->areaVerifier($r));
    }
 
}