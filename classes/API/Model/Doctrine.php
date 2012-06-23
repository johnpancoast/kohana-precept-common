<?php

/**
 * doctrine specific api/model interaction class
 */
class API_Model_Doctrine extends API_Model {
	/**
	 * @see parent::get();
	 */
	public function get($id)
	{
		// FIXME implement actual model call
		return 'DOCTRINE GET';
	}

	/**
	 * @see parent::edit();
	 */
	public function edit($id, array $params = array())
	{
		// FIXME implement actual model call
		return 'DOCTRINE EDIT';
	}

	/**
	 * @see parent::add();
	 */
	public function add(array $params = array())
	{
		// FIXME implement actual model call
		return 'DOCTRINE CREATE';
	}

	/**
	 * @see parent::delete();
	 */
	public function delete($id)
	{
		// FIXME implement actual model call
		return 'DOCTRINE DELETE';
	}
}
