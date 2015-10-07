<?php
require __DIR__ . '/../../vendor/autoload.php';
header('Content-Type: text/plain');

use Zinio\Algorithms\Fibonacci;

$max = 1000;
$fibo = new Fibonacci($max);
$fibo->run();
$arr = $fibo->getFibo();
echo implode('; ', $arr);