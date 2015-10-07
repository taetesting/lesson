<?php

namespace Zinio\Algorithms;

class ArrayOutputter
{
    private $arr;
    private $result;

    public function __construct(array $arr = []) {
        $this->arr = $arr;
        $this->result = [];
    }

    public function runWitRecursion()
    {

    }

    public function runWitoutRecursion()
    {
        $arr = $this->arr;
        $tmp = [];
        $level = 0;
        for ($i = 0; $i < count($arr); $i++) {
            if (!is_array($arr[$i])) {
                $this->result[] = $arr[$i];
                continue;
            }
            $tmp[$level] = array($arr, $i);
            $level++;
            $arr = $arr[$i];
            $i = -1;
        }
    }

    public function getResult()
    {
        return $this->result;
    }
}