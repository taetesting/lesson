<?php
require __DIR__ . '/../../vendor/autoload.php';

use Zinio\Solid\DependencyInversion\Classes\Keyboard;
use Zinio\Solid\DependencyInversion\Classes\Scanner;
use Zinio\Solid\DependencyInversion\Classes\Database;
use Zinio\Solid\DependencyInversion\Classes\Printer;
use Zinio\Solid\DependencyInversion\Copy;
use Zinio\Solid\DependencyInversion\IRead;
use Zinio\Solid\DependencyInversion\IWrite;

header('Content-Type: text/plain');

$reader = new Keyboard();
$writer = new Database();

$copy = new Copy($reader, $writer);
$copy->run();
echo PHP_EOL;
$copy2 = new Copy(new Scanner(), new Printer());
$copy2->run();