<?php

/**
 * kohana orm specific api/model interaction class
 */
class API_Model_ORM extends API_Model {
	/**
	 * @see parent::get();
	 */
	public function get($id)
	{
		// FIXME implement actual model call
		return 'KOHANA ORM GET';
	}

	/**
	 * @see parent::edit();
	 */
	public function edit($id, array $params = array())
	{
		// FIXME implement actual model call
		return 'KOHANA ORM EDIT';
	}

	/**
	 * @see parent::add();
	 */
	public function add(array $params = array())
	{
		// FIXME implement actual model call
		return 'KOHANA ORM CREATE';
	}

	/**
	 * @see parent::delete();
	 */
	public function delete($id)
	{
		// FIXME implement actual model call
		return 'KOHANA ORM DELETE';
	}
}
