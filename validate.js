function checkEmail(e) {
	// body...
	var element=e.target;
	if(/[^a-zA-Z0-9@._]/.test(element.value))
	{
		alert("Email is invalid! Only characters a-z A-Z 0-9 @ . _ allowed");
		element.value="";
		return false;
	}
	if(!/[^a-zA-Z]/.test(element.value))
	{
		alert("Email is invalid! Only characters a-z A-Z characters are must");
		element.value="";
		return false;
	}
	if(!/[^@]/.test(element.value))
	{
		alert("Email is invalid! You are missing @");
		element.value="";
		return false;
	}
	if(!/[^.]/.test(element.value))
	{
		alert("Email is invalid! .domain name is missing");
		element.value="";
		return false;
	}
	return true;
}

function checkSubject(e) {
	// body...
	if(/[^a-zA-Z0-9. ]/.test(element.value))
	{
		alert("Subject is invalid! Only characters a-z A-Z 0-9 . 'space' are allowed");
		element.value="";
		return false;
	}
	return true;
}

function checkMessage(e) {
	// body...
	if(/[^a-zA-Z. ]/.test(element.value))
	{
		alert("Message is invalid! Only characters a-z A-Z 0-9 . 'space' allowed");
		element.value="";
		return false;
	}
}

function submitForm(e) {
	// body...
	e.preventDefault();
	if (document.getElementById('user-email').value!="" 
		&& document.getElementById('subject').value!="" 
		&& document.getElementById('message').value!="") {
		var contact =document.getElementsByClassName('contact-form');
		contact[0].innerHTML = "<h3>Thank You For Your Response.We'll Shortly inform you</h3>";

	}
}

var email = document.getElementById('user-email');
email.addEventListener('blur',checkEmail,false);

var subject = document.getElementById('subject');
subject.addEventListener('blur',checkSubject,false);

var submit = document.getElementById('submit-btn');
submit.addEventListener('blur',submitForm,false);
