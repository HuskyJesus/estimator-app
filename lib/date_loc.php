<?php

//5. Dates & Locations
$features[] = [
	'name' => 'Calendaring',
	'group' => 'date_loc',
	'value_type' => 'days',
	'default' => 7,	
	'description' => 'Display and capture of data in a calendar format.',
	'icon' => 'calendar',
	'selected' => false,
	'project_type' => 'website',
];
$features[] = [
	'name' => 'Display of Map data / Geolocation',
	'group' => 'date_loc',
	'value_type' => 'days',
	'default' => 3,	
	'description' => 'Showing a map with data points, eg venue locations, driver locations etc.',
	'icon' => 'location dot on a circle',
	'selected' => false,
	'project_type' => 'website',
	];
$features[] = [
	'name' => 'Display of Custom Map Markers/Regions',
	'group' => 'date_loc',
	'value_type' => 'days',
	'default' => 3,	
	'description' => 'Allowing the user to select a map area visually or custom icons for different location types.',
	'icon' => 'location dot on x',
	'selected' => false,
	'project_type' => 'website',
];
$features[] = [
	'name' => 'Bookings',
	'group' => 'date_loc',
	'value_type' => 'days',
	'default' => 8,	
	'description' => 'Selecting start and end dates, managing capacity etc.',
	'icon' => 'calendar with shaded square',
	'selected' => false,
	'project_type' => 'website',
];