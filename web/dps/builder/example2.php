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

writeln('BEGIN TESTING BUILDER PATTERN');
writeln('');

$kid = new Kid(new KittenBuilder());
$kid->makeAnimal();
$kitten = $kid->getAnimal();
$info = $kitten->showMe();
echo implode('<br/>', $info);
writeln('');
echo $kitten->eat();
writeln('');

writeln('');
writeln('END TESTING BUILDER PATTERN');

  function writeln($line_in) {
    echo $line_in.'<br/>';
  }

?>