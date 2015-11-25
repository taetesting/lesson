<?php
require __DIR__ . '/../../vendor/autoload.php';

use Zinio\Solid\Demo\Circle;
use Zinio\Solid\Demo\Square;
use Zinio\Solid\Demo\AreaCalculator;
use Zinio\Solid\Demo\SumCalculatorOutputter;

// header('Content-Type: text/plain');

$shapes = array(
    new Circle(2),
    new Square(5),
    new Square(6)
);
$areas   = new AreaCalculator($shapes);
// $volumes = new AreaCalculator($solidShapes);
$output  = new SumCalculatorOutputter($areas);
// $output2 = new SumCalculatorOutputter($volumes);
// $output->JSON();

// $areas = new AreaCalculator($shapes);
// echo $areas->sum() . PHP_EOL;
// $output = new SumCalculatorOutputter($areas);