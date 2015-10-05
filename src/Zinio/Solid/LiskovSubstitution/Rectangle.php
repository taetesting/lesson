<?php
namespace Zinio\Solid\LiskovSubstitution;

class Rectangle
{
    private $heigth;

    private $width;

    public function setHeight($value)
    {
        $this->heigth = $value;
    }

    public function setWidth($value)
    {
        $this->width = $value;
    }

    public function getHeight()
    {
        return $this->heigth;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}