<?php

class Redirector
{

	protected $user;

	public function __construct($user)
	{
		$this->user = $user;
	}

	public function redirectIfLoggedin()
	{
		if ($this->user->sessionExists())
		{
			header('Location: chat.php');
			exit();
		}
	}

	public function redirectIfLoggedOut()
	{
		if (!$this->user->sessionExists())
		{
			header('Location: chat.php');
			exit();
		}
	}
}