<?php

//10.Security
$features[] = [
	'name' => 'SSL Certificate Based Security',
	'group' => 'security',
	'value_type' => 'days',
	'default' => 3,	
	'description' => 'The industry standard way to ensure your users data is safe during their use of your app.',
	'icon' => 'certificate with SSL on it',
	'selected' => false,
	'project_type' => 'website',
];
$features[] = [
	'name' => 'DoS Protection',
	'group' => 'security',
	'value_type' => 'days',
	'default' => 5,	
	'description' => 'For high volume app with a high public profile, you may be the target of Denial of Service attacks.',
	'icon' => 'lock',
	'selected' => false,
	'project_type' => 'website',
	];
$features[] = [
	'name' => 'Two Factor Autgentication',
	'group' => 'security',
	'value_type' => 'days',
	'default' => 5,	
	'description' => 'More common for financial or highly sensitive information based apps, this requires your user supplies additional information above a simple password.',
	'icon' => 'tablet and phone with lock on phone',
	'selected' => false,
	'project_type' => 'website',
];