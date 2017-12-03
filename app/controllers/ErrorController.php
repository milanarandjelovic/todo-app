<?php

class ErrorController extends Controller
{

	/**
	 * Render 404 page.
	 */
	public function index()
	{
		$this->view->render('errors/404.php');
	}
}
