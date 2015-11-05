<?php
require __DIR__ . '/../vendor/autoload.php';

use Zinio\Algorithms\Prime;
use Zinio\Example\Student;
header('Content-Type: text/plain');

// $arr = range('a', 'z');
// unset($arr[20]);
// unset($arr[20]);
// unset($arr[20]);
// echo "done";die;

// $k = 5000;
// $prime = new Prime($k);
// $prime->run();
// echo "Sum of {$k} first primes: {$prime->getSum(true)}\n";
// // echo "Loop times: {$prime->getLoopTimes(true)}\nPrime List:\n";
// // echo implode(' >> ', $prime->getPrimes());
// $testcases = range(4001, 5000);

// $start = microtime(true);
// foreach ($testcases as $key => $value) {
// 	$sum = array_sum(array_slice($prime->getPrimes(), 0, $value));
// 	// echo number_format($sum) . PHP_EOL;
// }
// $end = microtime(true);
// echo 'Total script execution time: ', ($end - $start), ".\n";
// // array_slice(array, $offset, $length)

$std1 = new Student();
// $std1->set('id', 1000);
$std1->set('name', 'VO NGO VAN XUAN');
$std1->set('email', 'tae.voxuan@gmail.com');
$std1->set('phone', '0976000700');

// $std2 = new Student();
$std2 = clone $std1;
$std2->set('name', 'VO NGO HOANG VU');
$std2->set('email', 'vu.vo@gmail.com');
$std2->set('phone', '0908078603');

echo $std1->get('name') . PHP_EOL;
echo $std1->get('email') . PHP_EOL;
echo $std1->get('phone') . PHP_EOL;
echo $std2->get('name') . PHP_EOL;
echo $std2->get('email') . PHP_EOL;
echo $std2->get('phone') . PHP_EOL;