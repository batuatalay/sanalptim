<?php
class UserModel extends Mysql
{
	public $name;
	public $surname;
	public $username;
	
	public function __construct($arr)
	{
		$conn = $this->connect();
		foreach ($arr as $key => $value) {
			$this->$key = $value;
		}
	}
}