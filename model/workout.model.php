<?php
class WorkoutModel extends Mysql
{
	private $id;
	private $cid;
	private $pid;
	private $workout_key;
	private $name;
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

	public function getClientWorkouts() {
		try {
			$engine = $this->pdo->prepare("SELECT * FROM workouts WHERE cid=?");
			$engine->execute([$this->cid]);
			$workouts = $engine->fetchAll(PDO::FETCH_ASSOC);
			$this->return(200, json_encode($workouts));
		} catch (PDOException $e) {
			$this->return(401, "Workouts getting Fail");
		}
	}

	public function workoutAdd($postData) {
		try {
			$engine = $this->pdo->prepare("INSERT INTO workouts(name, pid, cid, move_ids, startDate, endDate) VALUES (?, ? ,? ,? ,? ,?)");
			$engine->execute([
				$postData['name'],
				$postData['pid'],
				$postData['cid'],
				$postData['move_ids'],
				$postData['startDate'],
				$postData['endDate']
			]);
		} catch (PDOException $e) {
			$this->return(401, "Workout Add Fail");
		}
		$this->return(200, "Workout Add Success");
	}

	public function workoutEdit($postData) {
		$updateSql = [];
		$updateData = [];
		try {
			foreach ($postData as $key => $data) {
				if($key == "id") {
					$id = $data;
				} else {
					$updateSql[] = $key . "=?";
					$updateData[] = $data;
				}
			}
			array_push($updateData, $id);
			$engine = $this->pdo->prepare("UPDATE workouts set ". implode(",", $updateSql) . "WHERE id=?");
			$engine->execute($updateData);
		} catch (PDOException $e) {
			$this->return(401, "Workout Edit Fail");
		}
		$this->return(200, "Workout Edit Success");
	}

	public function delete() {
		try {
			$engine = $this->pdo->prepare("DELETE FROM workouts WHERE id = ?");
			$engine->execute([$this->id]);
		} catch (PDOException $e) {
			$this->return(401, "Workout Delete Fail");
		}
		$this->return(200, "Workout Delete Success");
	}
}