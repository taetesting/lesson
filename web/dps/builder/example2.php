<?php
/*
 * DESIGN PATTERN
 * CREATIONAL PATTERN : BUILDER
 * EXAMPLE 2
 *
 */
require __DIR__ . '/../../../vendor/autoload.php';
// header('Content-Type: text/plain');

use Zinio\DesignPatterns\CreationalPatterns\Builder\Example2\Kid;
use Zinio\DesignPatterns\CreationalPatterns\Builder\Example2\AnimalBuilder;
use Zinio\DesignPatterns\CreationalPatterns\Builder\Example2\KittenBuilder;
// use Zinio\DesignPatterns\CreationalPatterns\Builder\Example1\HTMLPageDirector;

writeln('BEGIN TESTING BUILDER PATTERN');
writeln('');

$kittenBuilder = new KittenBuilder();
$kid = new Kid($kittenBuilder);
$kid->makeAnimal();
$kitten = $kid->getAnimal();
echo implode('<br/>', $kitten->showMe());
writeln('');
echo $kitten->eat();
writeln('');


writeln('');
writeln('END TESTING BUILDER PATTERN');

  function writeln($line_in) {
    echo $line_in.'<br/>';
  }

?>