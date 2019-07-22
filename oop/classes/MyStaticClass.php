<?php

// MyStaticClass.php

class MyStaticClass
{
	public static $x;
	
	public function __construct()
	{
		self::$x++;
	}
}
