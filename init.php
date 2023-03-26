<?php
define("DEVELOPMENT", false);
if(DEVELOPMENT) {
	define("ENV", "http://localhost/");
	define("BASE", "/var/www/html");
} else {
	define("ENV", "https://sanalptim.com/");
	define("BASE", "/var/www/sanalptim.com/public_html");
}
define("DBHOST", "localhost");
define("DBNAME", "sanalptim");
if(DEVELOPMENT) {
	define("DBUSERNAME", "phpmyadmin");
	define("DBPASSWORD", "1.(Sanalptim)");
} else {
	define("DBUSERNAME", "sanalDB");
	define("DBPASSWORD", "1.(Sinematalay)");
}

