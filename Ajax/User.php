<?php

class User
{

	public function createSession($userID)
	{
		if (!$this->sessionExists())
		{
			$_SESSION['userID'] = $userID;

			return true;
		}

		return false;
	}

	public function getSessionID()
	{
		if (isset($_SESSION['userID']))
		{
			return $_SESSION['userID'];
		}

		return false;
	}

	public function sessionExists()
	{
		return isset($_SESSION['userID']);
	}

	public function deleteSession()
	{
		session_destroy();
	}

	public function getDetails()
	{
		$id = $this->getSessionID();
		$query = DB::getInstance()->query("SELECT * FROM users WHERE id = " . $id );
	}
}