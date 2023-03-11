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
	
	public function __construct($arr = [])
	{
		$this->pdo = $this->connect();
		foreach ($arr as $key => $value) {
			$this->$key = $value;
		}
	}
	public function getByUsername() {
		try {
			$result = $this->pdo->prepare("SELECT * FROM pts WHERE username=?");
			$result->execute([$this->username]); 
			$pt = $result->fetch();
			var_dump($pt);exit;
		}
		catch(PDOException $e){
			echo "fail";
			exit;
		}
	}
	public function getByID() {
		try {
			$result = $this->pdo->prepare("SELECT * FROM pts WHERE id=?");
			$result->execute([$this->id]);
			$pt = $result->fetch();
			return $pt;
		}
		catch(PDOException $e) {
			echo 'fail';
			exit;
		}
	}

	public function getAllPts() {
		try {
			$result = $this->pdo->prepare("SELECT * FROM pts");
			$result->execute();
			$pts = $result->fetchAll(PDO::FETCH_ASSOC);
			return $pts;
		}
		catch (PDOException $e) {
			echo "fail";
			exit;
		}
	}
}