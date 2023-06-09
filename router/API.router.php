<?php
require_once BASE . "/router.php";
class Router extends BaseRouter {
}
$route = new Router();
$route->run('GET', '/API/settings', "site@get4API");
$route->run('POST', '/API/settings', "site@saveSettings");

//PT CRUD
$route->run('GET', '/API/pt/get', "pt@getPTs");
$route->run('GET', '/API/pt/get/#username', "pt@getByUsername");
$route->run('GET', '/API/pt/getById/#id', "pt@getByID");
$route->run('POST', '/API/pt/add', "pt@createNewPt");
$route->run('POST', '/API/pt/edit/#id', "pt@editPt");
$route->run('DELETE', '/API/pt/delete/#id', "pt@deletePt");

//branch CRUD
$route->run('GET', '/API/branch/get/#branchKey', "branch@getBranchByBranchKey");
$route->run('GET', '/API/branches', "branch@allBranches");
$route->run('POST', '/API/branch/add', "branch@createNewBranch");
$route->run('POST', '/API/branch/edit/#id', "branch@editBranch");
$route->run('DELETE', '/API/branch/delete/#id', "branch@deleteBranch");

//move CRUD
$route->run('GET', '/API/moves', "move@getAll4API");
$route->run('GET', '/API/move/get/#key', "move@getByMoveKey");
$route->run('POST', '/API/move/add', "move@createNewMove");
$route->run('POST', '/API/move/edit/#id', "move@editMove");
$route->run('DELETE', '/API/move/delete/#id', "move@deleteMove");

//workout CRUD
$route->run("GET", '/API/workout/get/#cid', "workout@getClientWorkouts");
$route->run("POST", '/API/workout/add', "workout@workoutAdd");
$route->run("POST", '/API/workout/edit/#id', "workout@workoutEdit");
$route->run("DELETE", '/API/workout/delete/#id', "workout@workoutDelete");

//Blog CRUD
$route->run("GET", "/API/blogs", "blog@getAll");
$route->run("GET", "/API/blog/#blog", "blog@get");
$route->run("POST", "/API/blog/add", "blog@add");
$route->run("POST", "/API/blog/edit/#id", "blog@edit");
$route->run("DELETE", "/API/blog/delete/#id", "blog@delete");

