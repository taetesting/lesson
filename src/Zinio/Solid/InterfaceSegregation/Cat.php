<?php
namespace Zinio\Solid\InterfaceSegregation;

use Zinio\Solid\InterfaceSegregation\Animal;
use Exception;

class Cat implements Animal
{
	public function fly()
	{
		throw new Exception("Undefined cat property");
	}
	
	public function run()
	{
		
	}

	public function bark()
	{
		throw new Exception("Undefined cat property");
	}
}