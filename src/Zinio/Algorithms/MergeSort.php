<?php
namespace Zinio\Algorithms;

class MergeSort
{
    private $inArr;

    function __construct() {
        
    }

    public function sort(array $arr)
    {
        $newArr = $this->mergeSort($arr);
        return $newArr;
    }

    private function mergeSort($arr)
    {
        if (1 == count($arr)) {
            return $arr;
        }
        $beg         = 0;
        $end         = count($arr);
        $mid         = $end / 2;
        $newLeftArr  = $this->mergeSort(array_slice($arr, $beg, $mid));
        $newRightArr = $this->mergeSort(array_slice($arr, $mid));
        return $this->merge($newLeftArr, $newRightArr);
    }

    private function merge($lArr, $rArr)
    {
        $r  = 0;
        $l  = 0;
        while (isset($lArr[$l]) || isset($rArr[$r])) {
            if ((isset($lArr[$l]) && $lArr[$l] < $rArr[$r]) || !isset($rArr[$r])) {
                $rs[] = $lArr[$l];
                $l++;
            } else {
                $rs[] = $rArr[$r];
                $r++;
            }
        }
        return $rs;
    }
}