<?php

session_start();

require('DB.php');
require('Validator.php');
require('User.php');
require('Redirector.php');

$db = new DB('root', 'usbw');
$user = new User();
$redirect = new Redirector($user);

if (!$error = $db->connect('chattr'))
{
	// Failed to connect to database
	throw new Exception("Failed to connect to DB. Error " . $error);
}