<?php

class ItemModel extends Model
{

	/**
	 * Save item.
	 *
	 * @return bool
	 */
	public function store()
	{
		$name = $_POST['name'] ? $_POST['name'] : '';

		if ( ! empty($name)) {
			$res = $this->db->prepare("
						INSERT INTO todos (name, completed, created_at, updated_at) 
						VALUES (:name, 0, NOW(), NOW())
			");
			$res->execute([':name' => $name]);

			return true;
		} else {
			return false;
		}
	}

	/**
	 * Update item.
	 *
	 * @param string $id
	 *
	 * @return bool
	 */
	public function update($id)
	{
		$name = $_POST['name'] ? $_POST['name'] : '';

		if ( ! empty($name)) {
			$this->db->exec("UPDATE todos SET name = '{$name}', updated_at = NOW() WHERE id = $id");

			return true;
		} else {
			return false;
		}
	}
}
