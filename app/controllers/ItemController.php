<?php

class ItemController extends Controller
{

	/**
	 * Store a newly created resource in storage.
	 */
	public function store()
	{
		if ( ! $this->model->store()) {
			// return false
			header('Location: ' . URL);
		}
		$_SESSION['info'] = 'Item created';
		header('Location: ' . URL);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param string $id
	 */
	public function show($id)
	{
		$todo             = $this->model->getAllById('todos', $id);
		$this->view->todo = $todo;
		$this->view->render('items/show.php');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param string $id
	 */
	public function update($id)
	{
		if ( ! $this->model->update($id)) {
			// return false
			header('Location: ' . URL);
		}
		header('Location: ' . URL);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param string $id
	 */
	public function delete($id)
	{
		if ( ! $this->model->destroy('todos', $id)) {
			// return false
			header('Location: ' . URL);
		}
		header('Location: ' . URL);
	}

	/**
	 * Complete todo.
	 *
	 * @param string $id
	 */
	public function completed($id)
	{
		if ( ! $this->model->completed('todos', $id)) {
			// return false
			header('Location: ' . URL);
		}
		header('Location: ' . URL);
	}

	/**
	 * Uncompleted todo.
	 *
	 * @param string $id
	 */
	public function uncompleted($id)
	{
		if ( ! $this->model->uncompleted('todos', $id)) {
			// return false
			header('Location: ' . URL);
		}
		header('Location: ' . URL);
	}
}
