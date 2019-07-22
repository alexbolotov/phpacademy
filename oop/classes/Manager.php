<?php

// User.php
include_once "User.php";


// Manager.php

class Manager extends User
{
	public $resultManager;
	
	public function setManager($login, $password, $email, $rating)
	{
		$this->login = $login;
		$this->password = $password;
		$this->email = $email;
		$this->rating = $rating;
	}
	
		public function getManager()
	{
		$this->resultManager = "login: " . $this->login . ", password: " . $this->password . ", email: " . $this->email . ", rating: " . $this->rating;
		return $this->resultManager;
	}
}
