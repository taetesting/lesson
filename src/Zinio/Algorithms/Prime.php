<?php
namespace Zinio\Algorithms;

class Prime
{
    private $times;
    private $primes;

    public function __construct($k)
    {
        $this->times = 0;
        $this->primes = [];
        $this->k = $k;
    }

    public function run()
    {
        $i = 0;
        $x = 2;
        $primes = [];
        while ($i < $this->k) {
            $xSqrt = sqrt($x);
            $xIsPrime = true;
            foreach ($primes as $prime) {
                $this->times++;
                if ($prime > $xSqrt || (!($x % $prime) && !($xIsPrime = false))) {
                    break;
                }
            }
            if ($xIsPrime) {
                $primes[] = $x;
                $this->primes[] = $x;
                $i++;
            }
            $x++;
        }
    }

    public function getPrimes()
    {
        return $this->primes;
    }

    public function getLoopTimes($format = false)
    {
        if ($format) {
            return number_format($this->times);
        }
        return $this->times;
    }

    public function resetLoopTimes()
    {
        $this->times = 0;
    }

    public function getSum($format = false)
    {
        if ($format) {
            return number_format(array_sum($this->primes));
        }
        return array_sum($this->primes);
    }
}