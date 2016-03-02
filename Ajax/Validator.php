<?php

class Validator
{
	/**
	* Validates a string with a minimal length
	*/
	public function validateString($value, $minLength, $maxLength = 12)
	{
		// Count word length
		$length = strlen($value);

		if ($length	> $minLength && $length	< $maxLength)
		{
			return true;
		}
		return false;
	}

	/**
	* Validates a given email
	*/
	public function validateEmail($email)
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			return true;
		}

		return false;
	}
}