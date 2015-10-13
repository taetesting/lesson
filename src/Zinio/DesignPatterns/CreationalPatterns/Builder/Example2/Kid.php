<?php
namespace Zinio\DesignPatterns\CreationalPatterns\Builder\Example2;

use Zinio\DesignPatterns\CreationalPatterns\Builder\Example2\AnimalBuilder;

class Kid
{
	private $name;
	private $builder;

	public function __construct(AnimalBuilder $inBuilder) {
		$this->builder = $inBuilder;
	}

	public function makeAnimal(array $info = array())
	{
	    $this->builder->buildAnimalHead('Head created');
	    $this->builder->buildAnimalBody('Body created');
	    $this->builder->buildAnimalArms('Arms created');
	    $this->builder->buildAnimalLegs('Legs created');
	    $this->builder->buildAnimalTail('Tail created');
	}

	public function getAnimal()
	{
		// var_dump($this->builder->animal);die;
	    return $this->builder->animal;
	}
}