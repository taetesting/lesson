<?php
namespace Zinio\DesignPatterns\CreationalPatterns\FactoryMethod\Example1;

use Zinio\DesignPatterns\CreationalPatterns\FactoryMethod\Example1\Pet;

class Dog implements Pet
{
    private $name = 'Coopy';

    public function giveBirth()
    {
        return new Dog;
    }

    public function talk()
    {
        return "Wolf Wolf";
    }

    public function setName($value)
    {
        $this->name = $value;
    }

    public function getName()
    {
        return $this->name;
    }
}