<?php
require_once BASE . "/router.php";
class Router extends BaseRouter {
}
$route = new Router();
$route->run('GET', '/move/get/#move', "move@getByKey");
$route->run('GET', '/move/getAll', "move@getAll");
