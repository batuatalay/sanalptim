<?php
require_once BASE . "/router.php";
class Router extends BaseRouter {
}
$route = new Router();
$route->run('/main', "main@getMainPage");
$route->run('/main/getSlider', "main@getSlider");
$route->run('/main/getUser', "main@getUser");
