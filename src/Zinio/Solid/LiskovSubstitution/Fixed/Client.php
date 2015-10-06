<?php
namespace Zinio\Solid\LiskovSubstitution\Fixed;

use Zinio\Solid\LiskovSubstitution\Fixed\Shape;
use Exception;

class Client
{
	function areaVerifier(Shape $r)
    {
        return $r->area();
    }
}