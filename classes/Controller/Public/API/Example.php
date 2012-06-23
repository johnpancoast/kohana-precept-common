<?php

// this is a model api controller so it extends Controller_API_Model
// look at the parent class!! that's where model calls happen based on api calls but they can be overridden here too.
// FIXME we need some permissions
class Controller_Public_API_Example extends Controller_API_Model {
	// the model we're working with.
	protected $model = 'user';

	public function action_custom()
	{
		$this->response->body('doing something custom');
	}
}
