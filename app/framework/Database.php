<?php

class Database extends PDO
{

	/**
	 * Database constructor.
	 *
	 * @param $dbtype
	 * @param $dbhost
	 * @param $dbname
	 * @param $dbuser
	 * @param $dbpass
	 *
	 * @internal param $username
	 * @internal param $password
	 */
	public function __construct($dbtype, $dbhost, $dbname, $dbuser, $dbpass)
	{
		parent::__construct($dbtype . ':host=' . $dbhost . ';dbname=' . $dbname, $dbuser, $dbpass);
	}
}
