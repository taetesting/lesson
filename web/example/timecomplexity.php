<?php
header('Content-Type: text/plain');
$n = 20;
$arr = [];
for ($i = 0; $i < $n; $i++) {
	$arr[] = rand(1, 100);
}
echo print_r($arr, true) . PHP_EOL;

$max = $arr[0];

for ($i = 1; $i < $n; $i++) {
	if ($arr[$i] > $max) {
		$max = $arr[$i];
	}
}
echo $max;
