<?php

//9.External APIs and Integrations
$features[] = [
	'name' => 'Connect to One or More Third Party Services',
	'group' => 'ext_api_integ',
	'value_type' => 'days',
	'default' => 6,	
	'description' => 'Perhaps a data feed that you need to integrate with or a partner app.',
	'icon' => 'connect the dots',
	'selected' => false,
	'project_type' => 'website',
];
$features[] = [
	'name' => 'An API for Others to Integrate With Your App',
	'group' => 'ext_api_integ',
	'value_type' => 'days',
	'default' => 8,	
	'description' => 'You are building a platform and you want others to integrate with you directly.',
	'icon' => 'API',
	'selected' => false,
	'project_type' => 'website',
	];
$features[] = [
	'name' => 'SMS Messaging',
	'group' => 'ext_api_integ',
	'value_type' => 'days',
	'default' => 4,	
	'description' => 'Allow your app to send SMS messages.',
	'icon' => 'phone with text bubble',
	'selected' => false,
	'project_type' => 'website',
];
$features[] = [
	'name' => 'Phone Number Masking',
	'group' => 'ext_api_integ',
	'value_type' => 'days',
	'default' => 4,	
	'description' => 'Calls made through your app with have masked phone numbers.',
	'icon' => 'phone being called',
	'selected' => false,
	'project_type' => 'website',
];