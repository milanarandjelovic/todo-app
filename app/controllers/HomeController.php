<?php

class HomeController extends Controller
{

	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		$this->view->todos = $this->model->all('todos');
		$this->view->render('items/index.php');
	}
}
