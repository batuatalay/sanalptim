<?php 
require_once __DIR__ . "/../model/move.model.php";
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
class Move extends SimpleController{

	public static function getAll() {
		$moveModel = new MoveModel();
		$moves = $moveModel->getAll();
		$args = [
            "moves" => $moves

        ];
        $site = self::getFromAPI('site/getSettings');
        $title = "SanalPTim.com | Hareketler";

        self::header($title);
        self::view("move", "index", $args);

        $script = '<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
		<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
		<script>
			let table = new DataTable("#myTable", {
			    responsive: true
			});
		</script>';
        self::footer($site, $script);
    }
    public static function getByKey($move) {
    	$moveModel = new MoveModel([
    		'move_key' => $move
    	]);
    	$move = $moveModel->get();

    	$args = [
            "move" => $move

        ];
        $site = self::getFromAPI('site/getSettings');
        $title = "SanalPTim.com | " . $move['name'];

        self::header($title);
        self::view("move", "moveDetail", $args);

        $script = "";
        self::footer($site, $script);
    }
}