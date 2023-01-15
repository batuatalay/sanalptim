<?php

/**
 * 
 */
class UserModel
{
	public $name;
	public $surname;
	public $username;
	
	public function __construct($arr)
	{
		foreach ($arr as $key => $value) {
			$this->$key = $value;
		}
	}
}