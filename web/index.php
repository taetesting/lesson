<?php
require __DIR__ . '/../vendor/autoload.php';

use Zinio\Algorithms\Prime;
header('Content-Type: text/plain');

$arr = range('a', 'z');
unset($arr[20]);
unset($arr[20]);
unset($arr[20]);
echo "done";die;

$k = 5000;
$prime = new Prime($k);
$prime->run();
echo "Sum of {$k} first primes: {$prime->getSum(true)}\n";
// echo "Loop times: {$prime->getLoopTimes(true)}\nPrime List:\n";
// echo implode(' >> ', $prime->getPrimes());
$testcases = range(4001, 5000);

$start = microtime(true);
foreach ($testcases as $key => $value) {
	$sum = array_sum(array_slice($prime->getPrimes(), 0, $value));
	// echo number_format($sum) . PHP_EOL;
}
$end = microtime(true);
echo 'Total script execution time: ', ($end - $start), ".\n";
// array_slice(array, $offset, $length)