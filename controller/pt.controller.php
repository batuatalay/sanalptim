<?php 
require_once __DIR__ . "/../model/pt.model.php";
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
class Pt extends SimpleController{

	public static function get($username) {
		$ptModel = new PtModel([
			"username" => $username
		]);
		$ptModel->get();

    }
}