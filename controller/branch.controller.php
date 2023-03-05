<?php 
require_once __DIR__ . "/../model/branch.model.php";
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
class Branch extends SimpleController{

	public static function get($branchKey) {
		$branchModel = new BranchModel([
			"key" => $branchKey
		]);
		$branch = $branchModel->get();
		echo $branch['name'] . "\n";
		$result = $branchModel->getBranchWithPt($branch['id']);
		$pts = [];
		foreach ($result as $rs) {
			$pt = Pt::getByID($rs['pid']);
			$pts[$pt['id']] = $pt['name'] . " " . $pt['surname'];
		}
		var_dump($pts);exit;
		

    }
}