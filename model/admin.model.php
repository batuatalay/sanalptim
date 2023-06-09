<?php
class AdminModel extends Mysql
{
	private $username;
	private $password;
	private $pdo;
	
	public function __construct($arr = [])
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
    public function createBranch($data) {
    	try {
	    	$branch_key = $this->seflink($data['name']);
	    	$name = $data['name'];
	    	$description = htmlspecialchars($data['content']);
	    	$branch = $this->pdo->prepare("INSERT INTO branches (branch_key, name, description) VALUES (?, ?, ?)");
		    $branch->execute([$branch_key, $name, $description]);
		    return true;
		} catch (PDOException $e) {
			return false;
		}
    }

    public function createPt($data) {
    	try {
    		$name = $data['name'];
    		$surname = $data['surname'];
    		$username = $data['username'];
    		$password = $data['password'];
    		$targetDir = BASE . "/assets/images/pt/";
    		$ext = pathinfo($data['file']['name'] , PATHINFO_EXTENSION);
    		$file = $data['file']['tmp_name'];
    		$targetFile = $targetDir . $username . "." . $ext;
    		if (!move_uploaded_file($file, $targetFile)) {
			    return false;
			}
    		$branches = isset($data['branches']) ? $data['branches'] : false;
    		$properties = isset($data['properties']) ? $data['properties'] : false;
    		$imagePath = "assets/images/pt/" . $username . "." . $ext;
    		$pt = $this->pdo->prepare("INSERT INTO pts (name, surname, username, password, image, status, lastLogin) VALUES (?, ?, ?, ?, ?, ?, ?)");
    		$result = $pt->execute([$name, $surname, $username, hash('sha256', $password), $imagePath, "WAITING", date('Y-m-d H:i:s')]);
    		$pid = $this->pdo->lastInsertId();

    		if ($branches) {
    			foreach ($branches as $bid) {
    				$branchPt = $this->pdo->prepare("INSERT INTO pt_branch (pid, bid) VALUES (?, ?)");
    				$branchPt->execute([$pid, $bid]);
    			}
    		}

    		if ($properties) {
    			foreach ($properties as $prop => $value) {
    				$ptProperties = $this->pdo->prepare("INSERT INTO pt_properties (pid, prop, value) VALUES (?, ?, ?)");
    				$ptProperties->execute([$pid, $prop, $value]);
    			}
    		}
    		return true;
    	} catch (PDOException $e) {
    		return false;
    	}
    }

    public function getAllBranches() {
    	$branches = $this->pdo->prepare("SELECT * FROM branches");
		$branches->execute();
		$result = $branches->fetchAll(PDO::FETCH_ASSOC);
		return $result;
    }

    public function getAllPts() {
    	$pts = $this->pdo->prepare("SELECT * FROM pts");
		$pts->execute();
		$results = $pts->fetchAll(PDO::FETCH_ASSOC);
		$allPt = [];
		foreach ($results as $result) {
			$allPt[$result['id']]['name'] = ucfirst($result['name']) . ' ' . ucfirst($result['surname']);
			$allPt[$result['id']]['username'] = $result['username'];
			$allPt[$result['id']]['lastLogin'] = $result['lastLogin'];
			$allPt[$result['id']]['status'] = $result['status'];

			$properties = $this->pdo->prepare("SELECT * from pt_properties where pid= ?");
			$properties->execute([$result['id']]);
			$propertyResult = $properties->fetchAll(PDO::FETCH_ASSOC);
			foreach ($propertyResult as $property) {
				$allPt[$result['id']][$property['prop']] = $property['value'];
			}
		}
		return $allPt;
    }
}