<?php
require __DIR__ . '/../../vendor/autoload.php';
ini_set('memory_limit', '-1');
header('Content-Type: text/plain');

use Zinio\Algorithms\ArrangeMatch;

$max = 4;
// $teams = range('A', 'F');
$teams = ['Brazil', 'France', 'Spain', 'England'];
$arrange = new ArrangeMatch($teams);
$arrange->run();
$round1 = $arrange->getTheFirstRound();
$round2 = $arrange->getTheSecondRound();
echo implode('; ', $round1) . PHP_EOL;
echo implode('; ', $round2) . PHP_EOL;