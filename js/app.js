function register()
{
	// AJAX stuff
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