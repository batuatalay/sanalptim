<?php
require_once BASE . "/router.php";
class Router extends BaseRouter {
}
$route = new Router();
$route->run('GET', '/API/pt/get', "pt@getPTs");
$route->run('GET', '/API/pt/get/#username', "pt@getByUsername");
$route->run('GET', '/API/pt/getById/#id', "pt@getByID");

$route->run('GET', '/API/branch/get/#branchKey', "branch@getBranchByBranchKey");
$route->run('GET', '/API/branches', "branch@allBranches");

$route->run('GET', '/API/moves', "move@getAll4API");
$route->run('GET', '/API/move/get/#key', "move@getByMoveKey");

$route->run('GET', '/API/settings', "site@get4API");

$route->run('POST', '/API/branch/add', "branch@createNewBranch");
$route->run('POST', '/API/move/add', "move@createNewMove");
$route->run('POST', '/API/settings', "site@saveSettings");


//PT CRUD
$route->run('POST', '/API/pt/add', "pt@createNewPt");
$route->run('POST', '/API/pt/edit/#id', "pt@editPt");
$route->run('DELETE', '/API/pt/delete/#id', "pt@deletePt");

