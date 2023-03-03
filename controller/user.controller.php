<?php 
require_once __DIR__ . "/../model/user.model.php";
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
class User extends SimpleController{

	public static function createNewUser () {
		self::view("user", "index");
		$userModel = new UserModel([
			"name" => "Thor",
			"surname" => "Odinson",
			"username" => "crazy_thor"
		]);
		var_dump($userModel);exit;
	}
	public static function getUser () {
		$username = new UserModel([
			"username" => ""
		]);
    }
    public static function userProducts() {
    	self::view("user", "index");
    	echo "<p>THOR</p>";
    	Product::createNewProduct();
    }
}