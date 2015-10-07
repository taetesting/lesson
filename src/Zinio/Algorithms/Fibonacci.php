<?php
namespace Zinio\Algorithms;

use Exception;

class Fibonacci
{
	private $max;
	private $fiboArr;

	public function __construct($max = 0) {
		$this->max = $max;
	}

	public function run($max = 0)
	{
		if ($max) {
			$this->max = $max;
		}
		if (!$this->max) {
			throw new Exception('Max is null');
		}
		$a = 0;
		$b = 1;
		$this->fiboArr[] = $a + $b;
		$this->fibo($a, $b, $this->max);
	}

	private function fibo($a, $b, $max)
	{
		if ($a + $b >= 1000) {
			return;
		}
		$this->fiboArr[] = $a + $b;
		$this->fibo($b, $a + $b, $max);
	}

	public function getFibo()
	{
		return $this->fiboArr;
	}
}