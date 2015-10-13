<?php
namespace Zinio\DesignPatterns\CreationalPatterns\Builder\Example2;

use Zinio\DesignPatterns\CreationalPatterns\Builder\Example2\AnimalBuilder;
use Zinio\DesignPatterns\CreationalPatterns\Builder\Example2\Kitten;

class KittenBuilder extends AnimalBuilder
{
    
    public function __construct()
    {
        $this->animal = new Kitten();
    }

    public function buildAnimalHead($head)
    {
        $this->animal->setHead($head);
    }
    
    public function buildAnimalBody($body)
    {
        $this->animal->setBody($body);
    }

    public function buildAnimalArms($arms)
    {
        $this->animal->setArms($arms);
    }

    public function buildAnimalLegs($legs)
    {
        $this->animal->setLegs($legs);
    }

    public function buildAnimalTail($tail)
    {
        $this->animal->setTail($tail);
    }
}