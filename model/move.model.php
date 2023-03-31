<?php
class MoveModel extends Mysql
{
	private $id;
	private $move_key;
	private $name;
	private $description;
	private $type;
	private $media;
	private $pdo;
	
	public function __construct($arr = [])
	{
		$this->pdo = $this->connect();
		foreach ($arr as $key => $value) {
			$this->$key = $value;
		}
	}
	public function get() {
		try {
			$result = $this->pdo->prepare("SELECT * FROM moves WHERE move_key=?");
			$result->execute([$this->move_key]);
			$move = $result->fetch();
			return $move;
		}
		catch (PDOException $e) {
			echo "fail";
			exit;
		}
	}
	public function getAll() {
		try {
			$result = $this->pdo->prepare("SELECT * FROM moves");
			$result->execute();
			$moves = $result->fetchAll(PDO::FETCH_ASSOC);
			return $moves;
		}
		catch (PDOException $e) {
			echo "fail";
			exit;
		}
	}
	public function createNewMove($data) {
		$name = $data['name'];
		$move_key = $this->seflink($data['name']);
		$description = $data['description'];
		$type = $data['type'];
		$media = $data['media'];
		$move = $this->pdo->prepare("INSERT INTO moves (move_key, name, description, type, media) VALUES (?, ?, ?, ?, ?)");
		$move->execute([$move_key, $name, $description, $type, $media]);
		$mid = $this->pdo->lastInsertId();
		echo $mid;
	}

	public function edit($postData) {
		$sql = [];
    	$updateData = [];
    	$properties = [];
    	try {
	    	foreach ($postData as $key => $data) {
	    		if ($key == "file") {

	    		} else if ($key == "id") {
	    			$id = $data;
	    		} else {
	    			$sql[] = $key . "=?";
	    			$updateData[] = $data;
	    			if ($key == "name") {
	    				$sql[] = "move_key=?";
	    				$updateData[] = $this->seflink($data);
	    			}
	    		}
	    	} 
	    	$updateQuery = implode(',', $sql);
	    	$engine = $this->pdo->prepare("UPDATE moves SET ". $updateQuery ." WHERE id = ?");
	    	array_push($updateData, $id);
	    	$engine->execute($updateData);
	    } catch(PDOException $e) {
	    	$this->return(401, "Move Update Error");
	    }
	    $this->return(200, "Move Update Sucess");
	}

	public function delete() {
		try {
			$engine = $this->pdo->prepare("DELETE FROM moves WHERE id = ?");
			$engine->execute([$this->id]);
		} catch (PDOException $e) {
			$this->return(400, "Move Delete Fail");
		}
		$this->return(200, "Move Delete Success");
	}
}