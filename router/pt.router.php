<?php
require_once BASE . "/router.php";
class Router extends BaseRouter {
}
$route = new Router();
$route->run('GET', '/pt/get/#pt', "pt@getByUsername");
$route->run('GET', '/pt/getAll', "pt@getAll");
