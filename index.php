<?php
require_once "init.php";
$dirName = dirname($_SERVER['SCRIPT_NAME']);
$baseName = basename($_SERVER['SCRIPT_NAME']);
$constantArr = explode('/', ltrim(str_replace([$dirName, $baseName], null, $_SERVER["REQUEST_URI"]), '/'));
if(empty($constantArr[0])) {
	header('Location:main');
} else {
	define('URI', $constantArr);
	if(file_exists(__DIR__ . '/router/' . URI[0] . ".router.php")) {
		require_once __DIR__ . '/router/' . URI[0] . ".router.php";
	}
}

?>