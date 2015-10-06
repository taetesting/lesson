<?php
namespace Zinio\Solid\LiskovSubstitution\Fixed;

abstract class Shape
{
	protected $heigth;
	protected $width;

	abstract public function setHeigth($value);

	abstract public function getHeigth();

	abstract public function setWidth($value);

	abstract public function getWidth();

	public function area()
	{
	    return $this->heigth * $this->width;
	}
}