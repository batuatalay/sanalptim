<?php
class BlogModel extends Mysql
{
	private $id;
	private $title;
	private $blog_key;
	private $content;
	private $image;
	private $view;
	private $created_at;
	private $updated_at;
	private $pdo;
	
	public function __construct($arr = [])
	{
		$this->pdo = $this->connect();
		foreach ($arr as $key => $value) {
			$this->$key = $value;
		}
	}
	public function get() {
		try {
			$engine = $this->pdo->prepare("SELECT * FROM blogs WHERE blog_key=?");
			$engine->execute([$this->blog_key]); 
			$blog = $engine->fetch(PDO::FETCH_ASSOC);
			$blog['content'] = htmlspecialchars_decode($blog['content']);
			$this->return(200, json_encode($blog));
		}
		catch(PDOException $e){
			$this->return(401, "Getting Blog Fail");
		}
	}

	public function getByID() {
		try {
			$engine = $this->pdo->prepare("SELECT * FROM blogs WHERE id=?");
			$engine->execute([$this->id]); 
			$blog = $engine->fetch(PDO::FETCH_ASSOC);
			$blog['content'] = htmlspecialchars_decode($blog['content']);
			return($blog);
		}
		catch(PDOException $e){
			$this->return(401, "Getting Blog Fail");
		}
	}

	public function getAll() {
		try {
			$allBlog = $this->pdo->prepare("SELECT * FROM blogs");
			$allBlog->execute();
			$blogs = $allBlog->fetchAll(PDO::FETCH_ASSOC);
			$this->return(200, json_encode($blogs));
		} catch (PDOException $e) {
			$this->return(401, "Getting All Blog fail");
		}
	}

	public function add($postData) {
		try {
			if(!empty($postData['file'])) {
				$blogKey = $this->seflink($postData['title']);
				$ext = pathinfo($postData['file']['image']['name'], PATHINFO_EXTENSION);
				if(!in_array($ext, ['jpg', 'jpeg', 'png'])) {
					$this->return(501, "Blog :: File Extension Error");
				}
				$targetDir = BASE . "/assets/images/blog/";
				$targetFile = $targetDir . $blogKey . "." . $ext;
				if(move_uploaded_file($postData['file']['image']["tmp_name"], $targetFile)) {
					$engine = $this->pdo->prepare("INSERT INTO blogs(title, blog_key, content, image) VALUES (?, ?, ?, ?)");
					$engine->execute([$postData['title'], $blogKey, htmlspecialchars($postData['content']), $targetFile]);
					$this->return(200, "Adding Blog Success");
				} else {
					$this->return(501, "Blog :: file Does not upload");
				}
			}
		} catch(PDOException $e) {
			$this->return(401, "Adding blog fail");
		}
	}

	public function edit($postData) {
		try {
			$updateQuery = [];
			$updateData = [];
			$image= "";
			foreach ($postData as $key => $value) {
				if ($key == "title") {
					$blogKey = $this->seflink($value);
					$updateQuery[] = $key . "= ?";
					$updateQuery[] = "blog_key=?";
					$updateData[] = $value;
					$updateData[] = $this->seflink($value);
					$targetDir = BASE . "/assets/images/blog/";
					$image = $targetDir . $blogKey . ".";
				}
				else if ($key == "file") {
					if($image) {
						try {
							$ext = pathinfo($value['file']['name'], PATHINFO_EXTENSION);
							$image .= $ext;
							move_uploaded_file($value['file']["tmp_name"], $image);	
						} catch (Exception $e) {
							$this->return(501, "BLOG :: Edit File Does Not Upload");
						}
						$updateQuery[] = "image=?";
						$updateData[] = $image;
					}
				} else {
					$updateQuery[] = $key . "= ?";
					$updateData[] = $value;
				}
			}
			$query = implode(',', $updateQuery);
			$updateData[] = $this->id;
			$engine = $this->pdo->prepare("UPDATE blogs SET " . $query . " WHERE id = ?");
			$engine->execute($updateData);
			$this->return(200, "BLOG :: edit Success");
		} catch (PDOException $e) {
			var_dump($e);exit;
			$this->return(401, "BLOG :: edit fail");
		}
	}

	public function delete() {
		try {
			$engine = $this->pdo->prepare("DELETE FROM blogs WHERE id = ?");
			$engine->execute([$this->id]);

		} catch(PDOException $e) {
			$this->return(401, "Delete Blog Fail");
		}
		$this->return(200, "Delete Blog Success");
	}
}