<?php

//Fraction.php

class Fraction
{
	public $ch;
	public $zn;
	public $fr;
	public $dec;
	public static $a;
	public static $b;
	
	public function __construct()
	{
		$this->ch = rand(1,10);
		$this->zn = 10;
		$this->fr = $this->ch . '/' . $this->zn;
		echo $this->fr;
		echo "<br />";
		echo floor($this->fr);
		echo "<br />";
		echo round($this->ch/$this->zn, 2);
		echo "<br />";
	}
	
	public static function numAdd(float $a, float $b)
	{
		try {
			if ($a <= 0 or $b <= 0) {
				throw new Exception();
			}
			self::$a = $a;
			self::$b = $b;
			echo self::$a + self::$b;
			} catch(Exception $e) {
			echo "Значения не могут быть 0 или меньше!";		
			}
	}
	
	public static function numSub($a, $b)
	{
		try {
			if ($a <= 0 or $b <= 0) {
				throw new Exception();
			}
			self::$a = $a;
			self::$b = $b;
			echo self::$a - self::$b;
			} catch(Exception $e) {
			echo "Значения не могут быть 0 или меньше!";		
			}
	}
	
	public static function numMult($a, $b)
	{
		try {
			if ($a <= 0 or $b <= 0) {
				throw new Exception();
			}
			self::$a = $a;
			self::$b = $b;
			echo self::$a * self::$b;
			} catch(Exception $e) {
			echo "Значения не могут быть 0 или меньше!";		
			}
	}
	
	public static function numDiv($a, $b)
	{
		try {
			if ($a <= 0 or $b <= 0) {
				throw new Exception();
			}
			self::$a = $a;
			self::$b = $b;
			echo self::$a / self::$b;
			} catch(Exception $e) {
			echo "Значения не могут быть 0 или меньше!";		
			}
	}
}




