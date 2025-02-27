<?php

// Get the current page url
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// Get the link reroutes
$routes = require_once "routes.php";

// Page error handling
function abort() {
	require_once "views/404.php";

	// Stop everything
	die();
}

// Get the correctly linked pages
function routeToController($uri, $routes) {
	// If the current page is a valid key url
	if (array_key_exists($uri, $routes)) {
		// Load the right page
		require_once $routes[$uri];
	} else {
		abort();
	}
}

routeToController($uri, $routes);