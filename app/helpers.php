<?php

/**
 * Global helpers file with misc functions
 **/

if (! function_exists('app_name')) {
	/**
	 * Helper to grab the application name
	 *
	 * @return mixed
	 */
	function app_name() {
		return config('app.name');
	}
}

if ( ! function_exists('javascript'))
{
	/**
	 * Access the javascript helper
	 */
	function javascript()
	{
		return app('JavaScript');
	}
}

if ( ! function_exists('gravatar'))
{
	/**
	 * Access the gravatar helper
	 */
	function gravatar()
	{
		return app('gravatar');
	}
}
