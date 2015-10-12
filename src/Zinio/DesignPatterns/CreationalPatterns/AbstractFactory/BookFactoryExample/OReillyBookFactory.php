<?php
namespace Zinio\DesignPatterns\CreationalPatterns\AbstractFactory\BookFactoryExample;

use Zinio\DesignPatterns\CreationalPatterns\AbstractFactory\BookFactoryExample\AbstractBookFactory;

class OReillyBookFactory extends AbstractBookFactory
{
    private $context = "OReilly";
    
    public function makePHPBook()
    {
        return new OReillyPHPBook();
    }

    public function makeMySQLBook()
    {
        return new OReillyMySQLBook();
    }
}