<?php
namespace Zinio\Solid\InterfaceSegregation\Fixed;

use Zinio\Solid\InterfaceSegregation\Fixed\Barkable;
use Zinio\Solid\InterfaceSegregation\Fixed\Runnable;

class Dog implements Runnable, Barkable
{
	public function run()
	{
	    
	}

	public function bark()
	{
	    
	}
}