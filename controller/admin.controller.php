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
        if(!self::isLogin("admin")) {
            header('Location: /admin/login');
        }
		self::adminHeader();
		self::adminFooter();
    }

    public static function login() {
        if (self::isLogin("admin")) {
            header('Location: /admin/index');
        }
        self::view("admin", "login");
    }

    public static function signIn($args) {
        $modelArr = [
            "username" => $args['username'],
            "password" => hash('sha256', $args['password'])
        ];
        $adminModel = new AdminModel($modelArr);
        $admin = $adminModel->login();
        if (!$admin) {
            $args = [
                "error" => "Login Fail"
            ];
            self::view("admin", "login", $args);
        } else {
            $_SESSION['admin'] = $admin;
            header('Location: /admin/index');
        }
    }
    public static function signOut() {
        unset($_SESSION['admin']);
        header('Location: /admin/login');
    }
}