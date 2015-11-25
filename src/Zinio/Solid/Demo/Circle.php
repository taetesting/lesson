<?php
namespace Zinio\Solid\Demo;

use Zinio\Solid\Demo\ShapeInterface;

class Circle implements ShapeInterface
{
    public $radius;

    function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * pow($this->radius, 2);
    }
}
