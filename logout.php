<?php

require('ajax/init.php');

if ($user->sessionExists()) 
{
	$user->deleteSession();
}


header('Location: index.php');
exit();