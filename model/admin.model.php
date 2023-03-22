<?php
class AdminModel extends Mysql
{
	private $username;
	private $password;
	private $pdo;
	
	public function __construct($arr)
	{
		$this->pdo = $this->connect();
		foreach ($arr as $key => $value) {
			$this->$key = $value;
		}
	}
	public function login() {
		try {
			$result = $this->pdo->prepare("SELECT * FROM pts WHERE username=? AND password=?");
			$result->execute([$this->username, $this->password]); 
			$user = $result->fetch();

			$update = $this->pdo->prepare("UPDATE pts SET lastLogin=:loginDate WHERE username=:username");
			$update->bindParam(':loginDate', date('Y-m-d H:i:s'));
			$update->bindParam(':username', $this->username);
			$update->execute();
			
			return $user;
		}
		catch(PDOException $e){
			var_dump($e);
			exit;
		}
	}
}