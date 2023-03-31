<?php

$allEndPoints = [
	"GET" => [
		//Admin
		'/admin/login',
		'/admin/index',
		'/admin/index/#username',
		'/admin/logOut',
		'/admin/settings',
		'/admin/branch/add',
		'/admin/branches',
		'/admin/pt/add',
		'/admin/pts',
		'/admin/move/add',
		'/admin/moves',
		'/admin/workout/add',
		'/admin/workouts',
		'/admin/blog/add',
		'/admin/blogs',
		'/site/getSettings',

		//Main
		'/main',
		'/main/index',
		'/main/getSlider',
		'/main/getUser',

		//Branch
		'/branch/get/#branch',

		//Move
		'/move/get/#move',
		'/move/getAll',

		//Pt
		'/pt/get/#pt',
		'/pt/getAll',

		//Workout
		'/workout/get/#workout',
		'/workout/getAll'
	],
	"POST" => [
		'/admin/login',
		'/admin/settings',
		'/admin/blog',
		'/admin/branch/add',
		'/admin/pt/add'
	],
	"DELETE" => [
	],
	"PUT" => []
];

$APIEndpoints = [
    "GET" => [
        '/API/pt/get',
        '/API/pt/get/#username',
        '/API/pt/getById/#id',
        '/API/pts',
        '/API/pt/add',
        '/API/branch/get/#branchKey',
        '/API/branches',
        '/API/moves',
        '/API/move/get/#key',
        '/API/settings'
    ],

    "POST" => [
        '/API/login',
        '/API/settings',
        '/API/pt/add',
        '/API/pt/edit/#id',
        '/API/pt/delete/#id',

        '/API/branch/add',
        '/API/branch/edit/#id',
        '/API/branch/delete/#id',

        '/API/move/add',
        '/API/move/edit',
        '/API/move/delete/#id',
    ],

    "DELETE" => [
    	'/API/pt/delete/#id',
    	'/API/branch/delete/#id'
    ]
];
foreach ($APIEndpoints as $key => $value) {
	$allEndPoints[$key] = array_merge($value, $allEndPoints[$key]);
}

?>