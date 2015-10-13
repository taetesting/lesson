<?php
namespace Zinio\DesignPatterns\CreationalPatterns\Builder\Example1;

use Zinio\DesignPatterns\CreationalPatterns\Builder\Example1\AbstractPageDirector;
use Zinio\DesignPatterns\CreationalPatterns\Builder\Example1\AbstractPageBuilder;

 class HTMLPageDirector extends AbstractPageDirector
 {
    private $builder = NULL;
    
    public function __construct(AbstractPageBuilder $builderIn)
    {
         $this->builder = $builderIn;
    }

    public function buildPage()
    {
        $this->builder->setTitle('Testing the HTMLPage');
        $this->builder->setHeading('Testing the HTMLPage');
        $this->builder->setText('Testing, testing, testing!');
        $this->builder->setText('Testing, testing, testing, or!');
        $this->builder->setText('Testing, testing, testing, more!');
        $this->builder->formatPage();
    }

    public function getPage()
    {
      return $this->builder->getPage();
    }
 }