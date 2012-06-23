<?php

/**
 * abstract class for interacting with a model using specific API'ish calls.
 * it's a layer between our API and whichever ORM our system happens to be using
 * at the time.
 * @abstract
 */
abstract class API_Model {
	/**
	 * @var string the model we're working with
	 */
	private $model = null;

	/**
	 * load specific api model driver class
	 * @param string $model the model the class is working with
	 * @param string $modelDriver the driver class to load
	 * @return API_Model a child instance of this class API_Model
	 * @access public
	 * @static
	 */
	public static function load($model, $modelDriver = null)
	{
		// if no driver passed, we'll determine from config which driver class to load.
		// FIXME - get the value from a kohana config'.
		$modelDriver = 'API_Model_'.ucfirst(($modelDriver ? $modelDriver : 'doctrine'));
		return new $modelDriver;
	}

	/**
	 * get a model
	 * @param int $id the id of the model to return
	 * @return array entity data
	 * @access public
	 * @abstract
	 */
	abstract public function get($id);

	/**
	 * edit a model
	 * @param int $id the id of the model to return
	 * @param array $params the values of the edited model
	 * @return bool successfully edited
	 * @access public
	 * @abstract
	 */
	abstract public function edit($id, array $params);

	/**
	 * create a model
	 * @param array $params the values to create the model
	 * @return array new model data
	 * @access public
	 * @abstract
	 */
	abstract public function add(array $params);

	/**
	 * delete a model
	 * @param int $id the id of the model to delete
	 * @return bool successfully deleted
	 * @access public
	 * @abstract
	 */
	abstract public function delete($id);
}
