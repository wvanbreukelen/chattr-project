<?php

class DB
{
	protected $username, $password;

	protected static $db;

	public function __construct($username, $password)
	{
		$this->username = $username;
		$this->password = $password;
	}

	public function connect($dbName)
	{
		self::$db = mysqli_connect('localhost', $this->username, $this->password, $dbName);

		if (!self::$db)
		{
			return mysqli_connect_error();
		}

		return true;
	}

	public function query($query)
	{
		if ($query = mysqli_query($this->getConnection(), $query))
		{
			return $query;
		} else {
			throw new Exception(mysqli_error($this->getConnection()));
		}
	}

	public function disconnect()
	{
		mysqli_close(self::$db);
	}

	public function getConnection()
	{
		return self::$db;
	}

	public static function getInstance()
	{
		return $this;
	}
}