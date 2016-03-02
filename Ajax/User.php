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
		return (isset($id = $_SESSION['userID']) ? $id : false;
	}

	public function sessionExists()
	{
		return isset($_SESSION['userID']));
	}

	public function deleteSession()
	{
		session_destroy(true);
	}

	public function getDetails()
	{
		$id = $this->getSessionID();
		$query = DB::getInstance()->query("SELECT * FROM users WHERE id = " . $id );
	}
}