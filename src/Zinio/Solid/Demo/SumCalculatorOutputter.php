<?php
namespace Zinio\Solid\Demo;

class SumCalculatorOutputter
{
    protected $areas;
    protected $calculator;

    function __construct($calculator)
    {
        $this->calculator = $calculator;
    }

    public function JSON()
    {
        $data = array(
            'sum' => $this->calculator->sum()
        );
        return json_encode($data);
    }

    public function HAML()
    {
        echo "output HAML";
    }

    public function HTML()
    {
        return implode('', array(
            '<h1>',
                'Sum of the areas of provided shapes: ',
                $this->calculator->sum(),
            '</h1>'
        ));
    }

    public function JADE()
    {
        echo "output JADE";
    }
}