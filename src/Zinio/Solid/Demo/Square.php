<?php
namespace Zinio\Solid\Demo;

use Zinio\Solid\Demo\ShapeInterface;
use Zinio\Solid\Demo\ManageShapeInterface;

class Square implements ShapeInterface, ManageShapeInterface
{
    public $length;

    function __construct($length)
    {
        $this->length = $length;
    }

    public function area()
    {
        return pow($this->length, 2);
    }

    public function calculate()
    {
        return $this->area();
    }
}