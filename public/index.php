<?php
	// index.php

	// load and initialize any global libraries
	require_once '../src/models/model.php';
	require_once '../src/controllers/controllers.php';

	/*** URI ROUTES ***/
	// route the request internally
	$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	//root uri - update accordingly when in a different directory
	$index = '/easymvc/';

	/** Routing starts here **/
	switch ($uri) {
		case $index:
	    	home_action();
			break;
		
		case $index . 'count':
			count_action();
			break;

		case $index . 'signin':
			signin_action();
			break;

		case $index . 'signup':
			signup_action();
			break;

		case $index . 'user':
			user_action();
			break;

		case $index . 'signout':
			signout_action();
			break;

		default:
		    header('HTTP/1.1 404 Not Found');
		    echo '<html><body><h1>Page Not Found</h1></body></html>';
			break;
	}

?>