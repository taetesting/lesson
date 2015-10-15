<?php
namespace Zinio\DesignPatterns\CreationalPatterns\FactoryMethod\Example1;

use Zinio\DesignPatterns\CreationalPatterns\FactoryMethod\Example1\Me;
use Zinio\DesignPatterns\CreationalPatterns\FactoryMethod\Example1\Cat;

class MeWithACat extends Me
{
    public function getMyPet()
    {
        return new Cat;
    }
}