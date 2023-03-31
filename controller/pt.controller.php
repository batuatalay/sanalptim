<?php 
require_once __DIR__ . "/../model/pt.model.php";
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
class Pt extends SimpleController{

	public static function getByUsername($username) {
		$ptModel = new PtModel([
			"username" => $username
		]);
		$pt = $ptModel->getByUsername();
        echo json_encode($pt);

    }
    public static function getByID($id) {
    	$ptModel = new PtModel([
    		'id' =>$id 
    	]);
    	$pt = $ptModel->getByID();
    	echo json_encode($pt);
    }

    public static function getPTs() {
    	$ptModel = new PtModel();
    	$pts = $ptModel->getAllPts();
        echo json_encode($pts);
    }

    public static function getAll(){
        $ptModel = new PtModel();
        $pts = $ptModel->getAllPts();
        $args = [
            "pts" => $pts

        ];

        $site = self::getFromAPI('site/getSettings');
        $title = "SanalPTim.com | Hocalarımız";
        self::header($title);

        self::view("pt", "index", $args);

        $script = "";
        self::footer($site, $script);
    }
    public static function createNewPt() {
        $_POST['file'] = $_FILES['file'];
        $ptModel = new PtModel();
        $response = $ptModel->createPt($_POST);
    }

    public static function editPt($pid) {
        if(!empty($_FILES)) {
            $_POST['file'] = $_FILES['file'];
        }
        $ptModel = new PtModel([
            'id' => $pid
        ]);
        $response = $ptModel->editPt($_POST);
    }

    public static function deletePt($id) {
        $ptModel = new PtModel([
            'id' => $id
        ]);
        $ptModel->delete();
    }
}