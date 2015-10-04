<?php

interface ShapeInterface
{
    public function area();
}

class Circle implements ShapeInterface
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * pow($this->radius, 2);
    }
}

class Square implements ShapeInterface
{
    public $length;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public function area()
    {
        return pow($this->length, 2);
    }
}

class AreaCalculator
{
    protected $shapes;

    public function __construct($shapes = array())
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
     //    foreach ($this->shapes as $shape) {
     //    	$area[] = $shape->area();
    	// }
    	foreach ($this->shapes as $shape) {
	        if (is_a($shape, 'ShapeInterface')) {
	            $area[] = $shape->area();
	            continue;
	        }
	        return false;
	    }
    	return array_sum($area);
    }
}

class SumCalculatorOutputter
{
	private $areaCalculator;

	public function __construct(AreaCalculator $areaCalculator) {
		$this->areaCalculator = $areaCalculator;
	}

	public function JSON()
    {
    	$data = array('sum_area' => $this->areaCalculator->sum());
        return json_encode($data);
    }

    public function HAML()
    {
     	echo "OUTPUT >> HAML";   
    }

    public function HTML()
    {
        return implode('', array(
            '<h1>',
                'Sum of the areas of provided shapes: ',
                $this->areaCalculator->sum(),
            '</h1>'
        ));
    }

    public function JADE()
    {
        echo "OUTPUT >> JADE";
    }
}

class VolumeCalculator extends AreaCalculator
{
    public function __construct($shapes = array())
    {
        parent::__construct($shapes);
    }

    public function sum()
    {
        // logic to calculate the volumes and then return and array of output
        return array($summedData);
    }
}    

header('Content-Type: text/plain');
$shapes = array(
    new Circle(2),
    new Square(5),
    new Square(6)
);

// $areas = new AreaCalculator($shapes);
// $output = new SumCalculatorOutputter($areas);

// echo $areas->output();
// echo $output->JSON() . PHP_EOL;

$areas = new AreaCalculator($shapes);
$volumes = new VolumeCalculator($shapes);

$output = new SumCalculatorOutputter($areas);
$output2 = new SumCalculatorOutputter($volumes);

echo $output->JSON() . PHP_EOL;
echo $output2->JSON() . PHP_EOL;