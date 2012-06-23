<?php defined('SYSPATH') or die('No direct script access.');

/**
 * routes.
 * note that ALL controller methods acceessible from sort of request (API, www) should be placed and accessed
 * from the 'classes/controller/public' directory.
 */

// api route.
Route::set('/api', 'api/<controller>/<action>(/<id>)')
	->defaults(array(
		'directory' => 'Public/API',
		'controller' => 'Index',
		'action'     => 'Index',
	));

