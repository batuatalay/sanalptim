<?php 
require_once __DIR__ . "/../model/site.model.php";
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
class Site extends SimpleController{

	public static function get() {
		$siteSettings = new SiteSettingsModel();
		return $siteSettings;
    }
}