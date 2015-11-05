<?php
require __DIR__ . '/../../vendor/autoload.php';
header('Content-Type: text/plain');

use Zinio\Algorithms\MergeSort;
$n = 20;
for ($i = 0; $i < $n; $i++) {
    $arr[] = rand(1, 99);
}
echo implode(' - ', $arr) . PHP_EOL;
if (isset($arr) && is_array($arr)) {
    $mergeSort = new MergeSort();
    $newArr    = $mergeSort->sort($arr);
    echo implode(' < ', $newArr);
}
