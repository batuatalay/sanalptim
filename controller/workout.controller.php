<?php 
require_once __DIR__ . "/../model/workout.model.php";
spl_autoload_register( function($className) {
	if($className == "SimpleController") {
		$fullPath = "simple.controller.php";
	} else {
		$extension = ".controller.php";
		$fullPath = $className . $extension;
	}
	require_once $fullPath;
});
/**
 * 
 */
class Workout extends SimpleController{

	public static function getAll() {
		$workoutModel = new WorkoutModel();
		$workouts = $workoutModel->getAll();
		var_dump($workouts);exit;
    }
}