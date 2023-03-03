<?php 
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
class Main extends SimpleController{

	public static function getMainPage() {
		self::view("main", "index");
	}

	public static function getSlider() {
		self::view("main", "index");
		echo 'Slider';
	}

	public static function getUser() {
		self::view("main", "index");
		user::getUser();
	}
}