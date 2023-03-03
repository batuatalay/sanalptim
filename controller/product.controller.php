<?php 
require_once __DIR__ . "/../model/product.model.php";
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
class Product extends SimpleController {
	
	public static function createNewProduct () {
		self::view("product", "index");
		$productModel = new ProductModel([
			"id" => self::createProductId("GL"),
			"name" => "Thor",
			"price" => 3999,
			"type" => "GOLD",
			"created_at" => date("Y-m-d H:i:s")
		]);
		var_dump($productModel);exit;
	}

	public static function createProductId ($type = "GL") {
		if(!in_array(strtoupper($type), ["SL", "GL", "DM"])) {
			$type = "GL";
		}
		return $type . strtotime(date("Y-m-d H:i:s")) . rand(10, 99);
	}
}