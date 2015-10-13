<?php
namespace Zinio\DesignPatterns\CreationalPatterns\Builder\Example2;

abstract class Animal
{
    public $head;
    public $body;
    public $arms;
    public $legs;
    public $tail;

    abstract public function setHead($value);
    abstract public function getHead();
    abstract public function setBody($value);
    abstract public function getBody();
    abstract public function setArms($value);
    abstract public function getArms();
    abstract public function setLegs($value);
    abstract public function getLegs();
    abstract public function setTail($value);
    abstract public function getTail();
    
    public function showMe()
    {
        $info['head'] = $this->head;
        $info['body'] = $this->body;
        $info['arms'] = $this->arms;
        $info['legs'] = $this->legs;
        $info['tail'] = $this->tail;
        return $info;
    }
}