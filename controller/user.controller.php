<?php 
require_once __DIR__ . "/../model/user.model.php";
require_once "simple.controller.php";
/**
 * 
 */
class User extends SimpleController{
	private $id;
	private $user;

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