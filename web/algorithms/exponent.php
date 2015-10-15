<?php
require __DIR__ . '/../../vendor/autoload.php';

header('Content-Type: text/plain');

use Zinio\Algorithms\Exponent;

$a = 3;
$n = 43;
$exponent = new Exponent();
$exponent->runTradition($a, $n);
echo 'Run traditional exponent: ' . $exponent->getTimeExcute() . PHP_EOL;
$exponent->run($a, $n);
echo 'Run improved exponent: ' . $exponent->getTimeExcute() . PHP_EOL;