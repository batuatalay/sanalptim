<?php 
require_once __DIR__ . "/../model/product.model.php";
/**
 * 
 */
class Product {
	private $id;
	private $product;

	public function createNewProduct () {
		$productModel = new ProductModel([
			"id" => $this->createProductId("GL"),
			"name" => "Thor",
			"price" => 3999,
			"type" => "GOLD",
			"created_at" => date("Y-m-d H:i:s")
		]);
		var_dump($productModel);exit;
	}

	public function createProductId ($type = "GL") {
		if(!in_array(strtoupper($type), ["SL", "GL", "DM"])) {
			$type = "GL";
		}
		return $type . strtotime(date("Y-m-d H:i:s")) . rand(10, 99);
	}
}