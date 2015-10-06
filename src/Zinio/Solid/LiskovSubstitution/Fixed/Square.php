<?php
namespace Zinio\Solid\LiskovSubstitution\Fixed;

use Zinio\Solid\LiskovSubstitution\Fixed\Shape;

class Square extends Shape
{
    public function setHeigth($value)
    {
        $this->setEdge($value);
    }

    public function getHeigth()
    {
        return $this->heigth;
    }

    public function setWidth($value)
    {
        $this->setEdge($value);
    }

    public function getWidth()
    {
        return $this->width;
    }

    private function setEdge($value)
    {
        $this->heigth = $value;
        $this->width = $value;
    }
}