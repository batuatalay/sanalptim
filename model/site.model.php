<?php

class SiteSettingsModel extends Mysql
{
	public $settings = array();
	
	public function __construct() {
		$this->pdo = $this->connect();
		try {
			$result = $this->pdo->prepare("SELECT prop, value FROM site_settings");
			$result->execute(); 
			$site_settings = $result->fetchAll();
			foreach ($site_settings as $key => $setting) {
				$this->settings[$setting['prop']] = $setting['value'];
			}
			return $this->settings;
		}
		catch(PDOException $e){
			var_dump($e);
			exit;
		}
	}
}
?>