<?php
class WorkoutModel extends Mysql
{
	private $id;
	private $workout_key;
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
	public function getAll() {
		try {
			$result = $this->pdo->prepare("SELECT * FROM workouts");
			$result->execute();
			$workouts = $result->fetchAll(PDO::FETCH_ASSOC);
			return $workouts;
		}
		catch (PDOException $e) {
			echo "fail";
			exit;
		}
	}
}