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
			$pt = $result->fetch(PDO::FETCH_ASSOC);
			return $pt;
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
			$pt = $result->fetch(PDO::FETCH_ASSOC);
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

	public function createPt($data) {
    	try {
    		$name = $data['name'];
    		$surname = $data['surname'];
    		$username = $data['username'];
    		$password = $data['password'];
    		$targetDir = BASE . "/assets/images/pt/";
    		$ext = pathinfo($data['file']['name'] , PATHINFO_EXTENSION);
    		$file = $data['file']['tmp_name'];
    		$targetFile = $targetDir . $username . "." . $ext;
    		if (!move_uploaded_file($file, $targetFile)) {
			    return false;
			}
    		$branches = isset($data['branches']) ? $data['branches'] : false;
    		$properties = isset($data['properties']) ? $data['properties'] : false;
    		$imagePath = "assets/images/pt/" . $username . "." . $ext;
    		$pt = $this->pdo->prepare("INSERT INTO pts (name, surname, username, password, image, status, lastLogin) VALUES (?, ?, ?, ?, ?, ?, ?)");
    		$result = $pt->execute([$name, $surname, $username, hash('sha256', $password), $imagePath, "WAITING", date('Y-m-d H:i:s')]);
    		$pid = $this->pdo->lastInsertId();

    		if ($branches) {
    			foreach ($branches as $bid) {
    				$branchPt = $this->pdo->prepare("INSERT INTO pt_branch (pid, bid) VALUES (?, ?)");
    				$branchPt->execute([$pid, $bid]);
    			}
    		}

    		if ($properties) {
    			foreach ($properties as $prop => $value) {
    				$ptProperties = $this->pdo->prepare("INSERT INTO pt_properties (pid, prop, value) VALUES (?, ?, ?)");
    				$ptProperties->execute([$pid, $prop, $value]);
    			}
    		}
    		return true;
    	} catch (PDOException $e) {
    		return false;
    	}
    }
}