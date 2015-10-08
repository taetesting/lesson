<?php
namespace Zinio\Solid\DependencyInversion\Classes;

use Zinio\Solid\DependencyInversion\IWrite;
use Exception;

class Printer implements IWrite
{
	public function write($content)
	{
	    return "\" {$content} \" has written by Printer";
	}
}