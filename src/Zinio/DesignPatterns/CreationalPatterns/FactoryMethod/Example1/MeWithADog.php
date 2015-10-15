<?php
namespace Zinio\DesignPatterns\CreationalPatterns\FactoryMethod\Example1;

use Zinio\DesignPatterns\CreationalPatterns\FactoryMethod\Example1\Me;
use Zinio\DesignPatterns\CreationalPatterns\FactoryMethod\Example1\Dog;

class MeWithADog extends Me
{
    public function getMyPet()
    {
        return new Dog();
    }
  
}