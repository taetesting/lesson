<?php
namespace Zinio\DesignPatterns\CreationalPatterns\AbstractFactory\BookFactoryExample;

use Zinio\DesignPatterns\CreationalPatterns\AbstractFactory\BookFactoryExample\AbstractBook;

abstract class AbstractPHPBook extends AbstractBook
{
    private $subject = "PHP";
}