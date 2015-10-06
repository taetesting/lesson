<?php

// use Zinio\Solid\LiskovSubstitution\Rectangle;
// use Zinio\Solid\LiskovSubstitution\Square;
// use Zinio\Solid\LiskovSubstitution\Client;
use Zinio\Solid\LiskovSubstitution\Fixed\Rectangle;
use Zinio\Solid\LiskovSubstitution\Fixed\Square;
use Zinio\Solid\LiskovSubstitution\Fixed\Client;

class LspTest extends PHPUnit_Framework_TestCase {
 
    // function testRectangleArea()
    // {
    //     $r = new Rectangle();
    //     $c = new Client();
    //     $this->assertTrue($c->areaVerifier($r));
    // }

    // function testSquareArea()
    // {
    //     $r = new Square();
    //     $c = new Client();
    //     $this->assertTrue($c->areaVerifier($r));
    // }

    public function testRectangleArea()
    {
        $r = new Rectangle();
        $r->setHeigth(5);
        $r->setWidth(4);
        $c = new Client();
        $expected = 20;
        $result = $c->areaVerifier($r);
        $this->assertEquals($expected, $result);
    }
    public function testSquareArea()
    {
        $r = new Square();
        $r->setHeigth(5);
        $c = new Client();
        $expected = 25;
        $result = $c->areaVerifier($r);
        $this->assertEquals($expected, $result);
    }
 
}