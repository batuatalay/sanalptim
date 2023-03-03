<?php

/**
 * 
 */
class ProductModel
{
	public $id;
	public $name;
	public $price;
	public $type;
	public $created_at;

	
	public function __construct($arr)
	{
		foreach ($arr as $key => $value) {
			$this->$key = $value;
		}
	}
}