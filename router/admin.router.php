<?php
require_once BASE . "/router.php";
class Router extends BaseRouter {
}
$route = new Router();
// $route->run('/admin/login', "admin@login");
//$route->run('/admin/index', "admin@index");
$route->run('GET', '/admin/login', "admin@login");
$route->run('GET', '/admin/index/#username', "admin@index");
$route->run('GET', '/admin/index', "admin@index");
$route->run('POST', '/admin/login', "admin@signIn");
$route->run('GET', '/admin/logOut', "admin@signOut");
$route->run('GET', '/admin/settings', "admin@getSettings");
$route->run('POST', '/admin/settings', "admin@saveSettings");
$route->run('GET', '/admin/blog', "admin@blog");
$route->run('GET', '/admin/blogs', "admin@blogs");
$route->run('POST', '/admin/blog', "admin@addBlog");
