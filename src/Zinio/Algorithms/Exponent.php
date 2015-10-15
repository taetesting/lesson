<?php
namespace Zinio\Algorithms;

class Exponent
{
    private $times;

    public function run($a, $n, $reset = true)
    {
        if ($reset == true) {
            $this->resetTimes();
        }
        $this->recursiveImproved($a, $n);
    }

    public function runTradition($a, $n, $reset = true)
    {
        if ($reset == true) {
            $this->resetTimes();
        }
        $this->recursiveTradition($a, $n);
    }

    private function recursiveTradition($a, $n)
    {
        $this->times++;
        if ($n < 1) {
            return 1;
        } else {
            return $a * $this->recursiveTradition($a, $n - 1);
        }
    }
    
    private function recursiveImproved($a, $n)
    {
        $this->times++;
        if ($n < 1) {
            return 1;
        } else {
            $p = $this->recursiveImproved($a, $n / 2);
            if ($n % 2) {
                return $p * $p;
            } else {
                return $p * $p * $a;
            }
        }
    }

    public function getTimeExcute()
    {
        return $this->times;
    }

    public function resetTimes()
    {
        $this->times = 0;
    }
}