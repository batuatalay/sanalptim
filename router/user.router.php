<?php
require_once BASE . "/router.php";
class Router extends Route {
}
$route = new Router();
$route->run('/user/newUser', "user@createNewUser");
$route->run('/user/getUser', "user@getUser");
