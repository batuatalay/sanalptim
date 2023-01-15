<?php
require_once "init.php";
$dirName = dirname($_SERVER['SCRIPT_NAME']);
$baseName = basename($_SERVER['SCRIPT_NAME']);
define('URI', explode('/', ltrim(str_replace([$dirName, $baseName], null, $_SERVER["REQUEST_URI"]), '/')));
if(file_exists(__DIR__ . '/router/' . URI[0] . ".router.php")) {
	require_once __DIR__ . '/router/' . URI[0] . ".router.php";
}
?>