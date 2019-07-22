<?php

// Car.php

class Car
{
	 public $brand;
	 public $model;
	 public $year;
	 public $driver;
	 private $price = 0.00;
	 
	 public function __construct()
	 {
		 echo "New Car is created! <br />";
	 }
	 
	 public function showBrand()
	 {
		 echo $this->brand;
	 }
	 
	 public function showModel()
	 {
		 echo $this->model;
	 }	
	
	public function setPrice(float $price)
	{
		$this->price = round($price, 2);
	}
	
	public function getPrice(bool $format = false)
	{
		if ($format == true) {
			return number_format($this->price, 2, ',', ' ');
		} else {
			return number_format($this->price);
		}
		
	}
}
