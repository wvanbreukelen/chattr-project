<?php

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
			<h2>{$ChatName}</h2>

			<span>
				<textarea readonly name="chatbox" id="chatbox" rows="13" cols="90">[$time] $message&#13;&#10;[$time] $message&#13;&#10;[$time] $message&#13;&#10;[$time] $message</textarea>
				<br />
				<input type="text" name="chatMessage" id="chatMessage" style="margin-right: 20px; margin-bottom: 10px; width: 650px;"><br />
				<button class="btn-success" name="sendChatMessage" id="sendChatMessage">Verstuur!</button>
			</span>
			<div class="userBox">
				Test
			</div>
		</div>

		<div class="chattr-footer">
			<p>Door Joery Hoegee en Wiebe van Breukelen</p>
		</div>
	</body>
</html>