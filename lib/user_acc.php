<?php

//3. Users & Accounts
$features[] = [
	'name' => 'Email / Password Sign Up',
	'group' => 'user_acc',
	'value_type' => 'days',
	'default' => 1,	
	'description' => 'Classic sign up with an email and password.',
	'icon' => 'letter with note coming out',
	'selected' => false,
	'project_type' => 'website',
];
$features[] = [
	'name' => 'Facebook Sign Up',
	'group' => 'user_acc',
	'value_type' => 'days',
	'default' => 2,	
	'description' => 'Sign up and sign in with a Facebook account.',
	'icon' => 'facebook "f"',
	'selected' => false,
	'project_type' => 'website'
	];
$features[] = [
	'name' => 'Twitter Sign Up',
	'group' => 'user_acc',
	'value_type' => 'days',
	'default' => 2,	
	'description' => 'Sign up and sign in with a Twitter account.',
	'icon' => 'twitter bird',
	'selected' => false,
	'project_type' => 'website',
];
$features[] = [
	'name' => 'Google Sign Up',
	'group' => 'user_acc',
	'value_type' => 'days',
	'default' => 2,	
	'description' => 'Sign up and sign in with a Google account.',
	'icon' => 'g+',
	'selected' => false,
	'project_type' => 'website',
];
$features[] = [
	'name' => 'LinkedIn Sign Up',
	'group' => 'user_acc',
	'value_type' => 'days',
	'default' => 2,	
	'description' => 'Sign up and sign in with a LinkedIn account.',
	'icon' => 'in',
	'selected' => false,
	'project_type' => 'website',
];
$features[] = [
	'name' => 'Github Sign Up',
	'group' => 'user_acc',
	'value_type' => 'days',
	'default' => 2,	
	'description' => 'Sign up and sign in with a Github account.',
	'icon' => 'cat head?',
	'selected' => false,
	'project_type' => 'website',
];
$features[] = [
	'name' => 'User Invitation Emails',
	'group' => 'user_acc',
	'value_type' => 'days',
	'default' => 2,	
	'description' => 'New users of the app can be invited by email.',
	'icon' => 'letter with note with person coming out',
	'selected' => false,
	'project_type' => 'website',
];
$features[] = [
	'name' => 'Multi-tenant Accounts',
	'group' => 'user_acc',
	'value_type' => 'days',
	'default' => 3,	
	'description' => 'Account based signups, each with their own administrators and users. A common case for SaaS style apps.',
	'icon' => 'three people',
	'selected' => false,
	'project_type' => 'website',
];
$features[] = [
	'name' => 'Subdomains',
	'group' => 'user_acc',
	'value_type' => 'days',
	'default' => 4,	
	'description' => 'In combination with multi-tenant accounts, this would allow your customers to access their account with their own subdomain, eg. acme.yourapp.com or xyz.yourapp.com',
	'icon' => 'tree graph',
	'selected' => false,
	'project_type' => 'website',
];
$features[] = [
	'name' => 'Custom Domains',
	'group' => 'user_acc',
	'value_type' => 'days',
	'default' => 4,	
	'description' => 'In combination with multi-tenant accounts, this would allow your customers to access their account with their own domain, eg. www.acme.com or www.xyz.com',
	'icon' => 'www',
	'selected' => false,
	'project_type' => 'website',
];