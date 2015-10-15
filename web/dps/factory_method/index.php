<?php
require __DIR__ . '/../../../vendor/autoload.php';

header('Content-Type: text/plain');

use Zinio\DesignPatterns\CreationalPatterns\FactoryMethod\Example1\MeWithACat;
use Zinio\DesignPatterns\CreationalPatterns\FactoryMethod\Example1\MeWithADog;

writeln('BEGIN TESTING BUILDER PATTERN');
writeln('');

writeln('once upon a time !!!');
$me = new MeWithACat();
writeln($me->introduceMyPet());
writeln(get_class($me));


writeln('At present');
$me = new MeWithADog();
writeln($me->introduceMyPet());

writeln('');
writeln('END TESTING BUILDER PATTERN');

function writeln($line_in)
{
    echo $line_in.PHP_EOL;
}