<?php

require('ajax/init.php');

$redirect->redirectIfLoggedin();

// Is button pressed?
if (isset($_POST['loginButton']))
{
	// Defined variables out of the post data
	$username  = html_entity_decode($_POST['username']);
	$password  = html_entity_decode($_POST['password']);

	// Validating
	$validator = new Validator();

	if (!$validator->validateString($username, 3, 12))
	{
		exit("1");
	}

	if (!$validator->validateString($password, 7, 20))
	{
		exit("2");
	}

	// Encrypt password to compare against database records
	$encPassword = sha1($password);

	$query = $db->query("SELECT * FROM users WHERE username = '$username' AND password = '$encPassword'");

	if (mysqli_num_rows($query) == 1)
	{
		$fetch = mysqli_fetch_array($query);

		$user->createSession($fetch['id']);
	} else {
		exit("3");
	}
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Chattr - Inloggen</title>

		<link rel="stylesheet" type="text/css" href="css/template.css">
	</head>
	<body>
		<div class="chattr-header">
			<h2>Chattr</h2>	
		</div>

		<div class="chattr-content">
			<h2>Inloggen</h2>

			<form action="login.php" method="post">
				<p><input type="text" id="username" name="username" placeholder="Gebruikersnaam"></p>
				<p><input type="password" id="password" name="password" placeholder="Wachtwoord"></p>
				<p><button name="loginButton" class="btn-success">Registreren</button></p>
			</form>
		</div>

		<div class="chattr-footer">
			<p>Door Joery Hoegee en Wiebe van Breukelen</p>
		</div>
	</body>
</html>