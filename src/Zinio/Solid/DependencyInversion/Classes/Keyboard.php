<?php
namespace Zinio\Solid\DependencyInversion\Classes;

use Zinio\Solid\DependencyInversion\IRead;
use Exception;

class Keyboard implements IRead
{
	public function read()
	{
		$file = "Open File Explorer";
	    return "<{$file}> Content is read from Keyboard";
	}

	public function openFileExplorer($parameters)
	{
	    return "Open File Explorer";
	}
}