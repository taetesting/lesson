<?php
namespace Zinio\DesignPatterns\CreationalPatterns\Builder\Example2;

use Zinio\DesignPatterns\CreationalPatterns\Builder\Example2\Animal;

class Monkey extends Animal
{
	public function setHead($value)
    {
        $this->head = $value;
    }

    public function getHead()
    {
        return $this->legs;
    }

    public function setBody($value)
    {
        $this->body = $value;
    }

    public function getBody()
    {
        return $this->legs;
    }

    public function setArms($value)
    {
        $this->arms = $value;
    }

    public function getArms()
    {
        return $this->legs;
    }

    public function setLegs($value)
    {
        $this->legs = $value;
    }

    public function getLegs()
    {
        return $this->legs;
    }

    public function setTail($value)
    {
        $this->tail = $value;
    }

    public function getTail()
    {
        return $this->tail;
    }

    public function eat()
    {

    }
}