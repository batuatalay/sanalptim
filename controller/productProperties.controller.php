<?php
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
class ProductProperties
{

	function __construct($productId)
	{
		$this->productId = $productId;
	}

	public function getProductProperties () {
		
	}
}