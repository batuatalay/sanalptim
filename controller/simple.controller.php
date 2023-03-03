<?php

/**
 * 
 */
class SimpleController
{
	
	public static function view($file, $view) {
    	if(file_exists(BASE . "/view/" .$file. "/" . $view . ".php")) {
    		require BASE . "/view/" .$file. "/" . $view . ".php";
    	}
    }
}
