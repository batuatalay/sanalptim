<?php
require_once BASE . "/router.php";
class Router extends BaseRouter {
}
$route = new Router();
$route->run('GET', '/main', "main@getMainPage");
$route->run('GET', '/main/index', "main@getIndex");
$route->run('GET', '/main/getSlider', "main@getSlider");
$route->run('GET', '/main/getUser', "main@getUser");
