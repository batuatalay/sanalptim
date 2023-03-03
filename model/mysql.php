<?php
/**
 * 
 */
class Mysql {
	
	public function connect() {
		try {
		  $conn = new PDO("mysql:host=" . DBHOST . ";dbname=" . DBNAME, DBUSERNAME, DBPASSWORD);
		  return $conn;
		} catch(PDOException $e) {
		  echo "Connection failed: " . $e->getMessage();
		}
	}
}

?>