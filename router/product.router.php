<?php
require_once BASE . "/router.php";
class Router extends Route {
}
$route = new Router();
$route->run('/product/newProduct', "product@createNewProduct");
