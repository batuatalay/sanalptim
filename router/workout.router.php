<?php
require_once BASE . "/router.php";
class Router extends BaseRouter {
}
$route = new Router();
$route->run('/workout/get/#workout', "workout@getByUsername");
$route->run('/workout/getAll', "workout@getAll");
