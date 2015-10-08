<?php
namespace Zinio\Solid\DependencyInversion\Classes;

use Zinio\Solid\DependencyInversion\IRead;
use Exception;

class Scanner implements IRead
{
	public function read()
	{
	    return "Content is read from Scanner";
	}
}