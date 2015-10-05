<?php
namespace Zinio\Solid\LiskovSubstitution;

use Zinio\Solid\LiskovSubstitution\Rectangle;

class Client
{
    function areaVerifier(Rectangle $r)
    {
        $r->setWidth(5);
        $r->setHeight(4);
        if($r->area() != 20) {
            throw new Exception('Bad area!');
        }
        return true;
    }
}