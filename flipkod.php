<?php

/*
* Zadatak T1762
*/

error_reporting(E_ALL);
ini_set('display_errors', TRUE);

/**
* Klasa za trokut
*/
class Triangle {

	public $a;
	public $b;
	public $c;
	public $height;

	public function __construct($a, $b, $c, $height)
	{
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
		$this->height = $height;
	}

	public function getCircumference()
	{
		return $this->a + $this->b + $this->c;
	}

	public function getArea()
	{
		return ($this->a * $this->height) / 2;
	}

}


$trokut1 = new Triangle(11,12,13, 10);
echo "Opseg trokuta je {$trokut1->getCircumference()} a njegova površina je {$trokut1->getArea()} <br>";


/**
* Klasa za krug
*/
class Circle {

	public $radius;
	public $pi = 3.14;

	public function __construct($r)
	{
		$this->radius = $r;	
	}

	public function getCircumference()
	{
		return 2 * $this->radius * $this->pi;
	}

	public function getArea()
	{
		return ( $this->radius * $this->radius ) * $this->pi;
	}
}

$krug1 = new Circle(22);
echo "Opseg kružnice je {$krug1->getCircumference()} a njezina površina je {$krug1->getArea()} <br>";





