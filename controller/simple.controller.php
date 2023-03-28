<?php

/**
 * 
 */
class SimpleController
{
	
	public static function view($file, $view, $args = null) {
    	if(file_exists(BASE . "/view/" .$file. "/" . $view . ".php")) {
    		include BASE . "/view/" .$file. "/" . $view . ".php";
    	}
    }
    public static function header($title = null) {
    	if(file_exists(BASE . "/view/static/header.php")) {
    		include BASE . "/view/static/header.php";
    	}
    }

    public static function footer($site, $script = null) {
    	if(file_exists(BASE . "/view/static/footer.php")) {
    		include BASE . "/view/static/footer.php";
    	}
    }
    public static function adminHeader($title = null) {
        if(file_exists(BASE . "/view/static/adminHeader.php")) {
            include BASE . "/view/static/adminHeader.php";
        }
    }

    public static function adminFooter($script = null) {
        if(file_exists(BASE . "/view/static/adminFooter.php")) {
            include BASE . "/view/static/adminFooter.php";
        }
    }

    public static function isLogin($location) {
        if (isset($_SESSION[$location])) {
            return $_SESSION[$location];
        } else {
            return false;
        }
    }
    public static function getFromAPI($url) {
        $ch = curl_init(); 
        $url = ENV . $url;
        curl_setopt($ch,CURLOPT_URL,$url); 
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true); 
     // curl_setopt($ch,CURLOPT_HEADER, false); 
        
        $output=curl_exec($ch); 
        curl_close($ch); 
        return json_decode($output); 
    }
}
