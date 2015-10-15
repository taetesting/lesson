<?php
namespace Zinio\DesignPatterns\CreationalPatterns\FactoryMethod\Example1;

abstract class Me
{
    abstract public function getMyPet();

    public function introduceMyPet()
    {
        $myPet = $this->getMyPet();
        $myPet->setName('LiveA');
        echo "Pet name:" . PHP_EOL;
        echo $myPet->getName() . PHP_EOL;
        echo "The parent pet talks:" . PHP_EOL;
        echo $myPet->talk() . PHP_EOL;
        
        echo ">> It's giving birth !!!" . PHP_EOL;
        $child = $myPet->giveBirth();
        echo "Pet name:" . PHP_EOL;
        echo $child->getName() . PHP_EOL;
        echo "The new born pet talks:" . PHP_EOL;
        echo $child->talk() . PHP_EOL ;
    }
}