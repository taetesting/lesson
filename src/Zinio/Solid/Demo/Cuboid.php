<?php
namespace Zinio\Solid\Demo;

use Zinio\Solid\Demo\ShapeInterface;
use Zinio\Solid\Demo\SolidShapeInterface;
use Zinio\Solid\Demo\ManageShapeInterface;

class Cuboid implements ShapeInterface, SolidShapeInterface, ManageShapeInterface
{
    public function area()
    {
     /*Do stuff here*/ 
    }

    public function volume()
    {
     /*Do stuff here*/ 
    }

    public function calculate()
    {
        return $this->area() + $this->volume();
    }
} 