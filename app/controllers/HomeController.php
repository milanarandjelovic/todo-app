<?php

class HomeController extends Controller
{

	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		$this->view->render('items/index.php');
	}
}
