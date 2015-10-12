<?php
namespace Zinio\DesignPatterns\CreationalPatterns\AbstractFactory\BookFactoryExample;

abstract class AbstractBook
{
    abstract function getAuthor();
    abstract function getTitle();
}