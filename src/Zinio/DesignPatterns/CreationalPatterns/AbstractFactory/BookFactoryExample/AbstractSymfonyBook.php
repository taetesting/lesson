<?php
namespace Zinio\DesignPatterns\CreationalPatterns\AbstractFactory\BookFactoryExample;

use Zinio\DesignPatterns\CreationalPatterns\AbstractFactory\BookFactoryExample\AbstractBook;

class AbstractSymfonyBook extends AbstractBook
{
	private $subject = "Symfony";
}