<?php
namespace Zinio\DesignPatterns\CreationalPatterns\AbstractFactory\BookFactoryExample;

use Zinio\DesignPatterns\CreationalPatterns\AbstractFactory\BookFactoryExample\AbstractBook;

abstract class AbstractMySQLBook extends AbstractBook
{
    private $subject = "MySQL";
}