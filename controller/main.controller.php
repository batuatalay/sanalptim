<?php 
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
class Main extends SimpleController{

	public static function getMainPage() {
		$title = "SanalPTim.com | Çok Yakında";
		self::header($title);

		$args = [
			//"title" => $title ## We have to send data in array
		];
		self::view("main", "yapim", $args);

		//$script = "<script>alert(1)</script>"; // if we need special script we need to send like this
		$script = "";
		self::footer($script);
	}

	public static function getIndex() {
		$pts = Pt::getPTs();
		$site = Site::get();
		//$phone = $site->settings['phone'];
		$title = "SanalPTim.com | Sporun En konforlu hali";
		self::header($title);

		$args = [
			"pts" => $pts,

		];
		self::view("main", "index", $args);

		//$script = "<script>alert(1)</script>"; // if we need special script we need to send like this
		$script = "";
		self::footer($script);
	}
}