<?php
namespace Zinio\Solid\LiskovSubstitution;

use Zinio\Solid\LiskovSubstitution\Rectangle;

class Square extends Rectangle
{
    public function setHeight($value)
    {
        $this->heigth = $value;
        $this->width = $value;
    }

    public function setWidth($value)
    {
        $this->heigth = $value;
        $this->width = $value;
    }
}