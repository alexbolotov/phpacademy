<?php

// User.php
include_once "User.php";


// Admin.php

class Admin extends User
{
		public $resultAdmin;
		
		public function setAdmin($login, $password, $email, $rating)
	{
		$this->login = $login;
		$this->password = $password;
		$this->email = $email;
		$this->rating = $rating;
	}
	
		public function getAdmin()
	{
		$this->resultAdmin = "login: " . $this->login . ", password: " . $this->password . ", email: " . $this->email . ", rating: " . $this->rating;
		return $this->resultAdmin;
	}
}
