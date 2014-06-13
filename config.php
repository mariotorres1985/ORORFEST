<?php 


// Override any of the default settings below:

$config['site_title'] = 'OROR FEST 2014';			// Site title
$config['base_url'] = 'http://localhost:8888/ORORFEST/'; 				// Override base URL (e.g. http://example.com)
$config['theme'] = 'OROR'; 			// Set the theme (defaults to "default")
$config['date_format'] = 'jS M Y';		// Set the PHP date format
$config['twig_config'] = array(			// Twig settings
	'cache' => false,					// To enable Twig caching change this to CACHE_DIR
	'autoescape' => false,				// Autoescape Twig vars
	'debug' => false					// Enable Twig debug
);
$config['pages_order_by'] = 'date';	// Order pages by "alpha" or "date"
$config['pages_order'] = 'asc';			// Order pages "asc" or "desc"
$config['excerpt_length'] = 25;			// The pages excerpt length (in words)

// To add a custom config setting:

$config['custom_setting'] = 'Hello'; 	// Can be accessed by {{ config.custom_setting }} in a theme


// advanced meta plugin  




// pagination plugin













