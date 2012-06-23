<?php

/**
 * base api model class. if an API controller wants to work with a model, extend this class and set the {@see $this->model} property
 */
class Controller_API_Model extends Controller_API {
	/**
	 * @var string the model we're working with. to be set in child class.
	 */
	protected $model = null;

	/**
	 * @var API_Model an instance of a child of API_Model
	 */
	protected $api_model = null;

	/**
	 * called before anything else
	 * @access public
	 */
	public function before()
	{
		if (!$this->model)
		{
			throw new Exception('You must set a model to use api > model functionality.');
		}
		if (!$this->api_model)
		{
			$this->api_model = API_Model::load($this->model);
		}

		// must call parent before() methods
		parent::before();
	}

	/**
	 * controller method
	 */
	public function action_get()
	{
		$id = 'id from request';

		// set the response from the api model's return value
		$this->response->body($this->api_model->get($id));
	}

	/**
	 * controller method
	 */
	public function action_edit()
	{
		$id = 'id from request';
		$params = array(
			'a bunch of post values',
			'a bunch of post values',
		);

		// set the response from the api model's return value
		$this->response->body($this->api_model->edit($id, $params));
	}

	/**
	 * controller method
	 */
	public function action_add()
	{
		$params = array(
			'a bunch of post values',
			'a bunch of post values',
		);

		// set the response from the api model's return value
		$this->response->body($this->api_model->add($params));
	}

	/**
	 * controller method
	 */
	public function action_delete()
	{
		$id = 'id from request';

		// set the response from the api model's return value
		$this->response->body($this->api_model->delete($id));
	}
}
