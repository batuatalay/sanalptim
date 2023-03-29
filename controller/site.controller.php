<?php 
require_once __DIR__ . "/../model/site.model.php";
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
class Site extends SimpleController{

	public static function get() {
		$siteSettings = new SiteSettingsModel();
		return $siteSettings;
    }

    public static function get4API() {
        $siteSettings = new SiteSettingsModel();
        echo json_encode($siteSettings);
    }
    public static function saveSettings() {
        $siteModel = new SiteSettingsModel();
        $siteModel->saveSettings($_POST);
        header('Location: /admin/settings');
    }
}