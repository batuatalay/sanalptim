<?php 
require_once __DIR__ . "/../model/blog.model.php";
spl_autoload_register( function($className) {
    if($className == "SimpleController") {
        $fullPath = "simple.controller.php";
    } else {
        $extension = ".controller.php";
        $fullPath = strtolower($className) . $extension;
    }
    require_once $fullPath;
});
/**
 * 
 */
class Blog extends SimpleController{

	public static function get($blog_key) {
		$BlogModel = new BlogModel([
			"blog_key" => $blog_key
		]);
		$BlogModel->get();
    }

    public static function getAll() {
        $BlogModel = new BlogModel();
        $BlogModel->getAll();
    }

    public static function add($data) {
        $data['file'] = $_FILES;
        $BlogModel = new BlogModel();
        $BlogModel->add($data);
    }

    public static function edit($id) {
        $BlogModel = new BlogModel([
            'id' => $id
        ]);
        if($_FILES['file']['name']) {
            $_POST['file'] = $_FILES;
        }
        $BlogModel->edit($_POST);
    }

    public static function delete($id) {
        $BlogModel = new BlogModel([
            'id' => $id
        ]);
        $BlogModel->delete();
    }
}