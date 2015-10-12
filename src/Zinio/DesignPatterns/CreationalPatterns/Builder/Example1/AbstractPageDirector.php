<?php
namespace Zinio\DesignPatterns\CreationalPatterns\Builder\Example1;

use Zinio\DesignPatterns\CreationalPatterns\Builder\Example1\AbstractPageBuilder;

abstract class AbstractPageDirector
{
    abstract function __construct(AbstractPageBuilder $builderIn);
    abstract function buildPage();
    abstract function getPage();
}