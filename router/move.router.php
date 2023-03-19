<?php
require_once BASE . "/router.php";
class Router extends BaseRouter {
}
$route = new Router();
$route->run('/move/get/#move', "move@getByKey");
$route->run('/move/getAll', "move@getAll");
