<?php
namespace Zinio\Algorithms;

class Exponent
{
    private $times;
    private $result;

    public function run($a, $n, $reset = true)
    {
        if ($reset == true) {
            $this->resetTimes();
        }
        $this->result = $this->recursiveImproved($a, $n);
    }

    public function runTradition($a, $n, $reset = true)
    {
        if ($reset == true) {
            $this->resetTimes();
        }
        $this->result = $this->recursiveTradition($a, $n);
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
            if ($n % 2 == 0) {
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

    public function getResult()
    {
        return $this->result;
    }
}