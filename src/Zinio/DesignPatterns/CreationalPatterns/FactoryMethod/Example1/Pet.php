<?php
namespace Zinio\DesignPatterns\CreationalPatterns\FactoryMethod\Example1;

interface Pet
{
    public function giveBirth();
    public function talk();
    public function setName($value);
    public function getName();
}