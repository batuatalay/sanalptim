<?php 
require_once __DIR__ . "/../model/client.model.php";
spl_autoload_register( function($className) {
    if($className == "SimpleController") {
        $fullPath = "simple.controller.php";
    } else {
        $extension = ".controller.php";
        $fullPath = strtolower($className) . $extension;
    }
    require_once $fullPath;
});
/**
 * 
 */
class Client extends SimpleController{

	public static function get($username) {
		$clientModel = new ClientModel([
			"username" => $username
		]);
		$clientModel->get();
    }
}