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
		$site = self::getFromAPI('site/getSettings');
		$title = "SanalPTim.com | " . $branch['name'];
		self::header($title);
		
		$result = $branchModel->getBranchWithPt($branch['id']);
		$pts = [];
		foreach ($result as $rs) {
			$pt = Pt::getByID($rs['pid']);
			$pts[$pt['id']] = $pt;
		}
		$args = [
			"branch" => $branch,
			"pts" => $pts,
			"site" => $site 

		];
		self::view("branch", "index", $args);
		$script = "";
		self::footer($site, $script);
		

    }

    public static function getAll() {
    	$branchModel = new BranchModel();
    	$branches = $branchModel->getAll();
    	return $branches;
    }
}