<?php

require('ajax/init.php');

// Is button pressed?
if (isset($_POST['registerButton']))
{
	// Defined variables out of the post data
	$username  = html_entity_decode($_POST['username']);
	$password  = html_entity_decode($_POST['password']);
	$email     = html_entity_decode($_POST['email']);
	$firstName = html_entity_decode($_POST['firstName']);
	$lastName  = html_entity_decode($_POST['lastName']);

	// Validating
	$validator = new Validator();

	if (!$validator->validateString($username, 3, 12))
	{
		exit("2");
	}

	if (!$validator->validateString($password, 7, 20))
	{
		exit("3");
	}

	if (!$validator->validateString($firstName, 2, 22))
	{
		exit("4");
	}

	if (!$validator->validateString($lastName, 2, 22))
	{
		exit("5");
	}

	// Encrypt password
	$password = sha1($password);

	// Send into database
	if ($db->query("INSERT INTO users (`username`, `password`, `email`, `firstName`, `lastName`) VALUES ('$username', '$password', '$email', '$firstName', '$lastName')"))
	{
		exit("0");
	}
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Chattr - Registreren</title>

		<link rel="stylesheet" type="text/css" href="css/template.css">
	</head>
	<body>
		<div class="chattr-header">
			<h2>Chattr</h2>	
		</div>

		<div class="chattr-content">
			<h2>Registreren</h2>

			<form action="register.php" method="post">
				<p><input type="text" id="username" name="username" placeholder="Gebruikersnaam"></p>
				<p><input type="password" id="password" name="password" placeholder="Wachtwoord"></p>
				<p><input type="email" id="email" name="email" placeholder="Email"></p>
				<p><input type="text" id="firstName" name="firstName" placeholder="Voornaam"></p>
				<p><input type="text" id="lastName" name="lastName" placeholder="Achternaam"></p>

				<p><button name="registerButton" class="btn-success">Registreren</button></p>
			</form>
		</div>

		<div class="chattr-footer">
			<p>Door Joery Hoegee en Wiebe van Breukelen</p>
		</div>
	</body>
</html>