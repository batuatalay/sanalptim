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
}