<?php
class AdminModel extends Mysql
{
	private $username;
	private $password;
	private $pdo;
	
	public function __construct($arr = NULL)
	{
		$this->pdo = $this->connect();
		foreach ($arr as $key => $value) {
			$this->$key = $value;
		}
	}
	public function login() {
		try {
			$result = $this->pdo->prepare("SELECT * FROM pts WHERE username=? AND password=?");
			$result->execute([$this->username, $this->password]); 
			$user = $result->fetch();

			$update = $this->pdo->prepare("UPDATE pts SET lastLogin=:loginDate WHERE username=:username");
			$update->bindParam(':loginDate', date('Y-m-d H:i:s'));
			$update->bindParam(':username', $this->username);
			$update->execute();
			
			return $user;
		}
		catch(PDOException $e){
			var_dump($e);
			exit;
		}
	}
	public function saveSettings($data) {
		$truncate = $this->pdo->prepare("TRUNCATE site_settings");
		$truncate->execute();
		foreach ($data as $key => $value) {
			$insert = $this->pdo->prepare("INSERT INTO site_settings (prop, value) VALUES (:prop, :value)");
			$insert->bindParam(':prop', $key);
			$insert->bindParam(':value', $value);
			$insert->execute();
		}
	}
	public function getAllBlog() {
		$blogs = $this->pdo->prepare("SELECT * FROM blogs");
		$blogs->execute();
		$result = $blogs->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function addBlog($data) {
		$title = $_POST['title'];
		$blog_key = $this->seflink($title);
		$content = $_POST['content'];
		$file = pathinfo($_POST['file']);
		$target_file = BASE . '/assets/images/' . $blog_key . '.' . $file['extension'];
		var_dump($_FILES);exit;
		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
	}

	public function seflink($text){
        $find = array("/Ğ/","/Ü/","/Ş/","/İ/","/Ö/","/Ç/","/ğ/","/ü/","/ş/","/ı/","/ö/","/ç/");
        $degis = array("G","U","S","I","O","C","g","u","s","i","o","c");
        $text = preg_replace("/[^0-9a-zA-ZÄzÜŞİÖÇğüşıöç]/"," ",$text);
        $text = preg_replace($find,$degis,$text);
        $text = preg_replace("/ +/"," ",$text);
        $text = preg_replace("/ /","-",$text);
        $text = preg_replace("/\s/","",$text);
        $text = strtolower($text);
        $text = preg_replace("/^-/","",$text);
        $text = preg_replace("/-$/","",$text);
        return $text;
    }

    public function getClients($status = null) {
    	if($status == null) {
    		$client = $this->pdo->prepare("SELECT * FROM clients");
    	} else {
	    	$client = $this->pdo->prepare("SELECT * FROM clients WHERE status = :status");
	    	$client->bindParam(':status', $status);
	    }
		$client->execute();
		$clients = $client->fetchAll(PDO::FETCH_ASSOC);
		return $clients;
    }

    public function getPts($status = null) {
    	if($status == null) {
    		$pt = $this->pdo->prepare("SELECT * FROM pts");
    	} else {
	    	$pt = $this->pdo->prepare("SELECT * FROM pts WHERE status = :status");
	    	$pt->bindParam(':status', $status);
	    }
		$pt->execute();
		$pts = $pt->fetchAll(PDO::FETCH_ASSOC);
		return $pts;
    }

    public function getAllClients() {
	    $client = $this->pdo->prepare("SELECT * FROM clients AS c ORDER BY c.startDate DESC LIMIT 50");
	    $client->execute();
	    $returnClients = $client->fetchAll(PDO::FETCH_ASSOC);
	    $clients = [];
	    foreach($returnClients as $client) {
	    	$clients[$client['id']] = $client;
	    	$prop = $this->pdo->prepare("SELECT * fROM client_properties WHERE cid=:cid");
	    	$prop->bindParam(':cid', $client['id']);
	    	$prop->execute();
	    	$prs = $prop->fetchAll(PDO::FETCH_ASSOC);
	    	foreach ($prs as $pr) {
	    		$client[$pr['prop']] = $pr['value'];
	    		$clients[$client['id']] = $client;
	    	}
	    }
	    return $clients;
    }
}