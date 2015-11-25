<?php
namespace Zinio\Solid\Demo;

use Zinio\Solid\Demo\ShapeInterface;

class AreaCalculator
{
    protected $shapes;

    function __construct($shapes = array())
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        $area = [];
        foreach ($this->shapes as $shape) {
            if ($shape instanceof ShapeInterface) {
                $area[] = $shape->area();
            }
        }
        return array_sum($area);
    }
}