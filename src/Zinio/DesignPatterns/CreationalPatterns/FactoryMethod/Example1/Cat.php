<?php
namespace Zinio\DesignPatterns\CreationalPatterns\FactoryMethod\Example1;

use Zinio\DesignPatterns\CreationalPatterns\FactoryMethod\Example1\Pet;

class Cat implements Pet
{
    private $name = 'Kitty';

    public function giveBirth()
    {
        return new Cat;
    }

    public function talk()
    {
        return "Mew Mew";
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