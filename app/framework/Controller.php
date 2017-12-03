<?php

class Controller
{

	/**
	 * @var Model
	 */
	public $model;

	/**
	 * @var View
	 */
	public $view;

	/**
	 * Controller constructor.
	 */
	public function __construct()
	{
		$this->view = new View();
	}

	/**
	 * Load model.
	 *
	 * @param string $name
	 */
	public function loadModel($name)
	{
		$path = APP_PATH . 'models/' . ucfirst($name) . 'Model.php';

		if (file_exists($path)) {
			include $path;

			$modelName   = ucfirst($name) . 'Model';
			$this->model = new $modelName();
		}
	}
}
