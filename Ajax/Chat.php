<?php

class Chat
{

	public function sendChatMessage($chatboxID, $message)
	{
		$date = 

		$this->getDB()->query("INSERT INTO chat (`chatboxID`, `message`, `userID`, `date`)");
	}

	protected function getUser()
	{
		return global $user;
	}

	protected function getDB()
	{
		return DB::getInstance();
	}
}