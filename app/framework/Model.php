<?php

class Model
{

	/**
	 * @var Database
	 */
	public $db;

	/**
	 * Model constructor.
	 */
	public function __construct()
	{
		$this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
		$this->db->exec(
			"SET character_set_connection = 'utf8',
			         character_set_server = 'utf8',
			         character_set_client = 'utf8',
			         character_set_database = 'utf8',
			         character_set_results = 'utf8'"
		);
	}

	/**
	 * Get all data from table;
	 *
	 * @param string $table
	 *
	 * @return array
	 */
	public function all($table)
	{
		$res = $this->db->query("SELECT * FROM $table");

		return $res->fetchAll(PDO::FETCH_OBJ);
	}

	/**
	 * Get all by id.
	 *
	 * @param string $table
	 * @param string $id
	 *
	 * @return mixed
	 */
	public function getAllById($table, $id)
	{
		$res    = $this->db->query("SELECT * FROM $table WHERE id = $id");
		$result = $res->fetch(PDO::FETCH_OBJ);

		return $result;
	}

	/**
	 * Delete from database.
	 *
	 * @param string $table
	 * @param string $id
	 *
	 * @return bool
	 */
	public function destroy($table, $id)
	{
		$this->db->exec("DELETE FROM $table WHERE id = $id");

		return true;
	}

	/**
	 * Complete todo.
	 *
	 * @param string $table
	 * @param string $id
	 *
	 * @return bool
	 */
	public function completed($table, $id)
	{
		$this->db->exec("UPDATE $table SET completed = 1, completed_at = NOW() WHERE id = $id");

		return true;
	}

	/**
	 * Uncompleted todo.
	 *
	 * @param string $table
	 * @param string $id
	 *
	 * @return bool
	 */
	public function uncompleted($table, $id)
	{
		$this->db->exec("UPDATE $table SET completed = 0 WHERE id = $id");

		return true;
	}
}
