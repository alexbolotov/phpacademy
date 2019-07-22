<?php

// UserInterface.php

include_once "UserInterface.php";

// User.php

class User implements UserInterface
{
	protected $login;
	protected $password;
	protected $email;
	protected $rating = 0;
	protected $isLogged;
	
	public function login() {
		echo $this->login . " is login!";
		$this->isLogged = 'true';
	}
	
	public function logout() {
		echo $this->login . " is logout!";
		$this->isLogged = 'false';
	}
	
		public function __set($name, $value)
	{
		switch($name)
		{
			case 'login':
				$this->login = $value;
				break;
			case 'password':
				$this->password = $value;
				break;
			case 'email':
				$this->email = $value;
				break;
			case 'rating':
				$this->rating = $value;
		}

	}
	
	public function __get($name)
	{
		switch ($name)
		{
			case 'login':
				return $this->login;
				break;
			case 'password':
				return $this->password;
				break;
			case 'email':
				return $this->email;
				break;
			case 'rating':
				return $this->rating;			
		}

	}	
	
}
