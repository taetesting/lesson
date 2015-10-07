<?php
require __DIR__ . '/../../vendor/autoload.php';
ini_set('memory_limit', '-1');
header('Content-Type: text/plain');

use Zinio\Algorithms\ArrayOutputter;

$arr = array(1, 2, 3, array(4, 5, array(6, array(7)), 8), 9);
$outputter = new ArrayOutputter($arr);
$outputter->runWitoutRecursion();
echo implode('; ', $outputter->getResult());