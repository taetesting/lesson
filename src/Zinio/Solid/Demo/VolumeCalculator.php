<?php
namespace Zinio\Solid\Demo;

use Zinio\Solid\Demo\AreaCalulator;

class VolumeCalculator extends AreaCalulator
{
    public function __construct($shapes = array())
    {
        parent::__construct($shapes);
    }

    public function sum()
    {
        // logic to calculate the volumes and then return and array of output
        // return array($summedData);
        return $summedData;
    }
}