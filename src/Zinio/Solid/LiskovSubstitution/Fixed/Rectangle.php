<?php
namespace Zinio\Solid\LiskovSubstitution\Fixed;

use Zinio\Solid\LiskovSubstitution\Fixed\Shape;

class Rectangle extends Shape
{
	public function setHeigth($value)
	{
	    $this->heigth = $value;
	}

	public function getHeigth()
	{
		return $this->heigth;
	}

	public function setWidth($value)
	{
	    $this->width = $value;
	}

	public function getWidth()
	{
		return $this->width;
	}
}