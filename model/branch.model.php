<?php
class BranchModel extends Mysql
{
	private $id;
	private $key;
	private $name;
	private $description;
	
	public function __construct($arr = [])
	{
		$this->pdo = $this->connect();
		foreach ($arr as $key => $value) {
			$this->$key = $value;
		}
	}
	public function get() {
		try {
			$result = $this->pdo->prepare("SELECT * FROM branches WHERE branch_key=?");
			$result->execute([$this->key]); 
			$branch = $result->fetch();
			return $branch;
		}
		catch(PDOException $e){
			echo 'fail';
			exit;
		}
	}

	public function getAll() {
		try {
			$result = $this->pdo->prepare("SELECT * FROM branches");
			$result->execute(); 
			$branch = $result->fetchAll(PDO::FETCH_ASSOC);
			return $branch;
		}
		catch(PDOException $e){
			echo 'fail';
			exit;
		}
	}
	public function getBranchWithPt($bid) {
		try {
			$result = $this->pdo->prepare("SELECT * FROM pt_branch WHERE bid=?");
			$result->execute([$bid]); 
			$branchWithPt = $result->fetchAll(PDO::FETCH_ASSOC);
			return $branchWithPt;
		}
		catch(PDOException $e){
			echo 'fail';
			exit;
		}
	}

	public function createNewBranch($data) {
    	try {
	    	$branch_key = $this->seflink($data['name']);
	    	$name = $data['name'];
	    	$description = htmlspecialchars($data['content']);
	    	$branch = $this->pdo->prepare("INSERT INTO branches (branch_key, name, description) VALUES (?, ?, ?)");
		    $branch->execute([$branch_key, $name, $description]);
		    return true;
		} catch (PDOException $e) {
			return false;
		}
    }
}