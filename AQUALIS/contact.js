document.getElementById('formcontact').onsubmit = function(event)

{
	
	if(document.getElementById('surname').value == "")
	{
		event.preventDefault();
		return alert('Veuillez entrer votre nom');
	}
	
	else if(document.getElementById('name').value == "")
	{
		event.preventDefault();
		return alert('Veuillez entrer votre prénom');
	}
	
	else if(document.getElementById('email').value == "")
	{
		event.preventDefault();
		return alert('Veuillez entrer votre adresse email');
	}
	
	else if(document.getElementById('city').value == "")
	{
		event.preventDefault();
		return alert('Veuillez entrer votre ville');
	}
	
	else if(document.getElementById('phone').value == "")
	{
		event.preventDefault();
		return alert('Veuillez entrer votre numéro de téléphone');
	}

	
	else if(document.getElementById('msg').value == "")
	{
		event.preventDefault();
		return alert('Veuillez rédiger votre message');
	}
	
}