<?php

class Router
{

	/**
	 * Router constructor.
	 */
	public function __construct()
	{
		$url = ! empty($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
		$url = rtrim($url, '/');
		$url = ltrim($url, '/');
		$url = filter_var($url, FILTER_SANITIZE_URL);
		$url = explode('/', $url);

		/**
		 * item/store/:id
		 * $controller item
		 * $function store
		 * $parameter id
		 */
		$controller = ! empty($url[0]) ? $url[0] : 'home';
		$function   = ! empty($url[1]) ? $url[1] : '';
		$parameter  = ! empty($url[2]) ? $url[2] : '';

		$file = APP_PATH . 'controllers/' . ucfirst($controller) . 'Controller.php'; // ItemController.php

		if (file_exists($file)) {
			require $file;

			$controllerName = ucfirst($controller) . 'Controller'; // ItemController
			$modelName      = ucfirst($controller); // Item
			$controller     = new $controllerName(); // controller have View and Model, construct and loadModel
			$controller->loadModel($modelName); // loadModel is define in Controller
			$controller->view->controllerName = $controller;
		} else {
			$this->error404();
		}

		if ( ! empty($function)) {
			if ( ! empty($parameter)) {
				$controller->$function($parameter);
			} else {
				$controller->$function();
			}
		} else {
			$controller->index();
		}
	}

	/**
	 * Return 404 page.
	 */
	private function error404()
	{
		require APP_PATH . 'controllers/ErrorController.php';
		$controller = new ErrorController();
		$controller->index();
		die();
	}
}
