<?php 
require_once __DIR__ . "/../model/admin.model.php";
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
class Admin extends SimpleController{

	public static function index() {
		self::adminHeader();
		self::adminFooter();
    }
    public static function login() {
        self::view("admin", "login");
    }
    public static function signIn($args){
        var_dump($args);exit;
    }
}