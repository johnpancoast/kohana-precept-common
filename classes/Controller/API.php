<?php

/**
 * base api controller class that all api methods should eventually extend from
 */
class Controller_API extends Controller {
	/**
	 * called before method actual method call
	 * @access public
	 */
	public function before()
	{
		// TODO prob do some API security validation here.

		// must call parent before()
		parent::before();
	}
}
