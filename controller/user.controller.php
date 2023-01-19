<?php 
require_once __DIR__ . "/../model/user.model.php";
spl_autoload_register( function($className) {
	if($className == "SimpleController") {
		$fullPath = "simple.controller.php";
	} else {
		$extension = ".controller.php";
		$fullPath = $path . $className . $extension;
	}
	require_once $fullPath;
});
/**
 * 
 */
class User extends SimpleController{

	public function createNewUser () {
		$userModel = new UserModel([
			"name" => "Thor",
			"surname" => "Odinson",
			"username" => "crazy_thor"
		]);
		var_dump($userModel);exit;
	}
	public function getUser () {
		$this->view("user", "index");
        for ($i=0; $i <10 ; $i++) { 
            echo $i.PHP_EOL;
        }
    }
}