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
		'admin/blogs',

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


?>