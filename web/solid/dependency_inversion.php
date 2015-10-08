<?php
require __DIR__ . '/../../vendor/autoload.php';

use Zinio\Solid\DependencyInversion\Classes\Database;
use Zinio\Solid\DependencyInversion\Classes\Keyboard;
use Zinio\Solid\DependencyInversion\Copy;
use Zinio\Solid\DependencyInversion\IRead;
use Zinio\Solid\DependencyInversion\IWrite;

$reader = new Keyboard();
$writer = new Database();

$copy = new Copy($reader, $writer);

$copy->run();