function register()
{
	// AJAX stuff

	$.post("register.php", { username: $('#username').val(), password: $('#password').val(), firstName: $('#firstName').val(), lastName: $('#lastName').val(), email: $('#email').val() }, function(data) {
		$('#message').css('display', 'block');
		
		console.log(data);

		if(data == 1)
		{
			error = "Dit emailadres is ongeldig.";
		} else if (data == 2) {
			error = "Gebruikersnaam lengte is niet tussen de 3 en 12 tekens.";
		} else if (data == 3) {
			error = "Opgegeven wachtwoord is niet tussen de 7 en 20 tekens.";
		} else if (data == 4) {
			error = "Opgegeven voornaam is niet tussen de 2 en 22 tekens.";
		} else if (data == 5) {
			error = "Opgegeven achternaam is niet tussen de 2 en 22 tekens.";
		}

		if (typeof error === "undefined" || data == 0)
		{
			$('#message').html("Successvol registreert, je wordt nu doorgestuurd...");
			window.location = "chat.php";
		} else {
			$('#message').html(error);
		}
		
	});


}

function login()
{

	$.post("login.php", { username: $('#username').val(), password: $('#password').val() }, function(data) {
		$('#message').css('display', 'block');
		
		console.log(data);

		if (data == 1)
		{
			error = "De opgegeven gebruikersnaam lengte is niet tussen de 3 en 12 tekens!";
		} else if (data == 2) {
			error = "Het opgegeven wachtwoord is niet tussen de 7 en 20 tekens!";
		} else if (data == 3) {
			error = "Er is geen account bij de ingevoerde gegevens gevonden!";
		}

		if (typeof error === "undefined" || data == 0)
		{
			$('#message').html("Successvol ingelogd, je wordt nu automatisch doorgestuurd...");
			setTimeout(function(){ window.location = "chat.php"; }, 3000);
		} else {
			$('#message').html(error);
		}
		
	});
}

function validateRegisterForm()
{
	var username  = $('#username');
	var password  = $('#password');
	var email     = $('#email');
	var firstName = $('#firstName');
	var lastName  = $('#lastName');

	error = false;

	if (username.length < 6 || username.length > 12)
	{
		error = true;
	}

	if (password.length < 7 || password.length > 12) 
	{
		error = true;
	}

	if (firstName.length < 6 || firstName.length > 12)
	{
		error = true;
	}
	
	if (lastName.length < 6 || lastName.length > 12)
	{
		error = true;
	}
	
	$('#errorBox').css('hidden', false);
	$('#errorBox').html("<div id='alert'>Vul alle verplichte velden in!</div>");

}

function sendChatMessage()
{
	var message = $('#chatMessage').val();


	$.post("chat.php", { message: message }, function(data) {
		console.log(data);
	});
}