<?php

/**
 * 
 */
class User extends Class
{
	private $User;
	private static $UserInstance = null;

	private function __construct(argument)
	{
		$this->MySQLObject = $User;
	}

	public static function init ($User){
		if(is_null(self::$UserInstance))
			self::$UserInstance = new User($User);
		return self::$UserInstance;
	}

	public function signup($usertype, $username, $fname, $email, $lname, $pass){
		$this->MySQLObject->insertData("User", array("user_type", "username", "user_email", "firstname", "lastname", "password"), array($usertype, $username, $fname, $email, $lname, $pass));
	}

	public function signin($login, $pass) {
		$query = "
			SET @login = :login
			SELECT * FROM USER
				WHERE (username = @login OR user_email = @login)
				AND password = :password
		";
		if($this->$query){
			$_SESSION['user'] = $username;
			return true;
		}
		return false;
	}
}