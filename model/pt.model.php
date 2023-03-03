<?php
class PtModel extends Mysql
{
	private $id;
	private $name;
	private $surname;
	private $username;
	private $password;
	private $lastLogin;
	private $pdo;
	
	public function __construct($arr)
	{
		$this->pdo = $this->connect();
		foreach ($arr as $key => $value) {
			$this->$key = $value;
		}
	}
	public function get() {
		try {
			$result = $this->pdo->prepare("SELECT * FROM pts WHERE username=?");
			$result->execute([$this->username]); 
			$user = $result->fetch();
			var_dump($user);exit;
		}
		catch(PDOException $e){
			var_dump($e);
			exit;
		}
	}
}