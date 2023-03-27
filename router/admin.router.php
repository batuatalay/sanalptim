<?php
require_once BASE . "/router.php";
class Router extends BaseRouter {
}
$route = new Router();
//GET
$route->run('GET', '/admin/login', "admin@login");
$route->run('GET', '/admin/index/#username', "admin@index");
$route->run('GET', '/admin/index', "admin@index");
$route->run('GET', '/admin/logOut', "admin@signOut");
$route->run('GET', '/admin/settings', "admin@getSettings");
$route->run('GET', '/admin/branch/add', "admin@branchAdd");

$route->run('GET', '/admin/branches', "admin@getAllBranches");
$route->run('GET', '/admin/pt/add', "admin@ptAdd");
$route->run('GET', '/admin/pts', "admin@pts");
$route->run('GET', '/admin/move/add', "admin@moveAdd");
$route->run('GET', '/admin/moves', "admin@moves");
$route->run('GET', '/admin/workout/add', "admin@workoutAdd");
$route->run('GET', '/admin/workouts', "admin@workouts");
$route->run('GET', '/admin/blog/add', "admin@blogAdd");
$route->run('GET', '/admin/blogs', "admin@blogs");

//POST
$route->run('POST', '/admin/settings', "admin@saveSettings");
$route->run('POST', '/admin/login', "admin@signIn");
$route->run('POST', '/admin/branch/add', "admin@createNewBranch");
$route->run('POST', '/admin/pt/add', "admin@createNewPt");