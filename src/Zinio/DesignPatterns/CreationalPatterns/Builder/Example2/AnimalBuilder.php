<?php
namespace Zinio\DesignPatterns\CreationalPatterns\Builder\Example2;

abstract class AnimalBuilder
{
    /**
     * Animal
     */
    public $animal;
    
    abstract public function buildAnimalHead($head);
    abstract public function buildAnimalBody($body);
    abstract public function buildAnimalArms($arms);
    abstract public function buildAnimalLegs($legs);
    abstract public function buildAnimalTail($tail);
}