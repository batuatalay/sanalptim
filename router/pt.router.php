<?php
require_once BASE . "/router.php";
class Router extends BaseRouter {
}
$route = new Router();
$route->run('/pt/get/#pt', "pt@getByUsername");
$route->run('/pt/getAll', "pt@getAll");
