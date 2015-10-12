<?php
namespace Zinio\DesignPatterns\CreationalPatterns\AbstractFactory\BookFactoryExample;

abstract class AbstractBookFactory
{
    abstract function makePHPBook();
    abstract function makeMySQLBook();
}