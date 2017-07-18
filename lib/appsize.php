<?php

//1. How big is your app?
$features[] = [
	'name' => 'Small',
	'group' => 'appsize',
	'value_type' => 'base_days',
	'default' => 10,	
	'description' => 'Your app probably has around 4-5 key feature pages (excluding any static content, sign in, sign up etc.)',
	'icon' => 'big S',
	'selected' => false,
	'project_type' => 'website',
];

$features[] = [
	'name' => 'Medium',
	'group' => 'appsize',
	'value_type' => 'base_days',
	'default' => 30,	
	'description' => 'Your app probably has around 6-9 key feature pages (excluding any static content, sign in, sign up etc.)',
	'icon' => 'big M',
	'selected' => false,
	'project_type' => 'website',
];
$features[] = [
	'name' => 'Large',
	'group' => 'appsize',
	'value_type' => 'base_days',
	'default' => 50,	
	'description' => 'Your app probably has around 10-15 key feature pages (excluding any static content, sign in, sign up etc.)',
	'icon' => 'big M',
	'selected' => false,
	'project_type' => 'website',
];