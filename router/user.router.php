<?php
require_once BASE . "/router.php";
class Router extends BaseRouter {
}
$route = new Router();
$route->run('GET', '/user/newUser', "user@createNewUser");
$route->run('GET', '/user/getUser', "user@getUser");
$route->run('GET', '/user/getUserProduct', "user@userProducts");
