<?php

//2. What level of UI would you like?
$features[] = [
	'name' => 'MVP',
	'group' => 'ui',
	'value_type' => 'percentage',
	'default' => 30,	
	'description' => 'Minimum Viable Product. Very raw but functional, no UI designer required.',
	'icon' => 'simple roof/single window home',
	'selected' => false,
	'project_type' => 'website',
];
$features[] = [
	'name' => 'Basic',
	'group' => 'ui',
	'value_type' => 'percentage',
	'default' => 50,	
	'description' => 'Still quite basic but pleasing to the eye, perhaps using purchased template.',
	'icon' => 'More pretty home',
	'selected' => false,
	'project_type' => 'website',
];
$features[] = [
	'name' => 'Polished',
	'group' => 'ui',
	'value_type' => 'percentage',
	'default' => 70,	
	'description' => 'Professional bespoke UI design. May also have some animations and transitions etc.',
	'icon' => 'Amazing sparkling home',
	'selected' => false,
	'project_type' => 'website',
];