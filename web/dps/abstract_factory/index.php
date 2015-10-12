<?php
/*
 * DESIGN PATTERN
 * CREATIONAL PATTERN : ABSTRACT FACTORY
 *
 */
require __DIR__ . '/../../../vendor/autoload.php';
header('Content-Type: text/plain');

use Zinio\DesignPatterns\CreationalPatterns\AbstractFactory\BookFactoryExample\OReillyBookFactory;
use Zinio\DesignPatterns\CreationalPatterns\AbstractFactory\BookFactoryExample\SamsBookFactory;

  writeln('[BEGIN TESTING ABSTRACT FACTORY PATTERN]');
  writeln('');
  writeln('------------------------------------------');
  writeln('testing OReillyBookFactory');
  writeln('------------------------------------------');
  $bookFactoryInstance = new OReillyBookFactory();
  testConcreteFactory($bookFactoryInstance);
  writeln('');
  writeln('------------------------------------------');
  writeln('testing SamsBookFactory');
  writeln('------------------------------------------');
  $bookFactoryInstance = new SamsBookFactory;
  testConcreteFactory($bookFactoryInstance);

  writeln('');
  writeln('[END TESTING ABSTRACT FACTORY PATTERN]');
  writeln('');

  function testConcreteFactory($bookFactoryInstance)
  {
      $phpBookOne = $bookFactoryInstance->makePHPBook();
      writeln('first php Author: '.$phpBookOne->getAuthor());
      writeln('first php Title: '.$phpBookOne->getTitle());
      writeln('');
      $phpBookTwo = $bookFactoryInstance->makePHPBook();
      writeln('second php Author: '.$phpBookTwo->getAuthor());
      writeln('second php Title: '.$phpBookTwo->getTitle());
      writeln('');
      $mySqlBook = $bookFactoryInstance->makeMySQLBook();
      writeln('MySQL Author: '.$mySqlBook->getAuthor());
      writeln('MySQL Title: '.$mySqlBook->getTitle());
  }

  function writeln($line_in) {
    echo $line_in.PHP_EOL;
  }