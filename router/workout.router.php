<?php
require_once BASE . "/router.php";
class Router extends BaseRouter {
}
$route = new Router();
$route->run('GET', '/workout/get/#workout', "workout@getByUsername");
$route->run('GET', '/workout/getAll', "workout@getAll");
