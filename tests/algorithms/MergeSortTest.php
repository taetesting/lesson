<?php

use Zinio\Algorithms\MergeSort;

class MergeSortTest extends PHPUnit_Framework_TestCase {

    public function invokeMethod(&$object, $methodName, array $parameters = array())
    {
        $reflection = new \ReflectionClass(get_class($object));
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);
        return $method->invokeArgs($object, $parameters);
    }

    public function testMergeSort()
    {
        $sort     = new MergeSort();
        $arr      = [2, 1, 7, 6, 3, 4, 5];
        $expected = [1, 2, 3, 4, 5, 6, 7];
        $result   = $sort->sort($arr);
        $this->assertEquals($expected, $result);

        // $result = $this->invokeMethod($sort, 'mergeSort', array($arr));
    }

    public function testMerge1()
    {
        $sort     = new MergeSort();
        $lArr     = [2];
        $rArr     = [1, 3];
        $result   = $this->invokeMethod($sort, 'merge', array($lArr, $rArr));
        $expected = [1, 2, 3];
        $this->assertEquals($expected, $result);
    }

    public function testMerge2()
    {
        $sort     = new MergeSort();
        $lArr     = [1, 3, 4];
        $rArr     = [2];
        $result   = $this->invokeMethod($sort, 'merge', array($lArr, $rArr));
        $expected = [1, 2, 3, 4];
        $this->assertEquals($expected, $result);
    }

    public function testMerge3()
    {
        $sort     = new MergeSort();
        $lArr     = [1, 3, 4, 5, 8, 10];
        $rArr     = [2, 5, 6, 7, 9];
        $result   = $this->invokeMethod($sort, 'merge', array($lArr, $rArr));
        $expected = [1, 2, 3, 4, 5, 5, 6, 7, 8, 9, 10];
        $this->assertEquals($expected, $result);
    }
}