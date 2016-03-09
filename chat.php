<?php

require('ajax/init.php');

$redirect->redirectIfLoggedout();

if (isset($_POST['message']))
{
	$message      = html_entity_decode($_POST['message']);
	$curTimestamp = time();

	if (!$validator->validateString($message, 1, 200))
	{
		exit("1");
	}
	
}

?>

<html>
	<head>
		<title>Chattr - Chat #1</title>

		<link rel="stylesheet" type="text/css" href="css/template.css">
	</head>
	<body>
		<div class="chattr-header">
			<h2>Chattr</h2>	
		</div>

		<div class="chattr-content">
			<h2>Algemene Chat</h2>

			<span>
				<textarea readonly name="chatbox" id="chatbox" rows="13" cols="90">[$time] $message&#13;&#10;[$time] $message&#13;&#10;[$time] $message&#13;&#10;[$time] $message</textarea>
				<br />
				<input type="text" name="chatMessage" id="chatMessage" style="margin-right: 20px; margin-bottom: 10px; width: 650px;"><br />
				<button onclick="sendChatMessage()" class="btn-success" name="sendChatMessage" id="sendChatMessage">Verstuur!</button>
			</span>
			<div class="userBox">
				
			</div>
		</div>

		<div class="chattr-footer">
			<p>Door Joery Hoegee en Wiebe van Breukelen</p>
		</div>

		<script src="js/jquery.js"></script>
		<script src="js/app.js"></script>
	</body>
</html>