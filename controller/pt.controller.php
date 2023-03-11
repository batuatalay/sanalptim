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

	public static function getByUsername($username) {
		$ptModel = new PtModel([
			"username" => $username
		]);
		$ptModel->getByUsername();

    }
    public static function getByID($id) {
    	$ptModel = new PtModel([
    		'id' =>$id 
    	]);
    	$pt = $ptModel->getByID();
    	return $pt;
    }

    public static function getPTs() {
    	$ptModel = new PtModel();
    	$pts = $ptModel->getAllPts();
    	return $pts;
    } 
}