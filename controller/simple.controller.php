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

    public static function footer($script = null) {
    	if(file_exists(BASE . "/view/static/footer.php")) {
    		include BASE . "/view/static/footer.php";
    	}
    }
}
