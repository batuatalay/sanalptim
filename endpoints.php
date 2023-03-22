<?php

$allEndPoints = [
	"GET" => [
		//Admin
		'/admin/login',
		'/admin/index',
		'/admin/index/#username',

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
		'/admin/login'
	],
	"DELETE" => [],
	"PUT" => []
];


?>