function id(e){return document.getElementById(e);}

function check() {
	if (id('name').value=='') {
		alert('Name in empty');
		return false;
	}
	if (id('surname').value=='') {
		alert('Surname is empty');
		return false;
	}
	if (id('password').value.length<8) {
		alert('Password too short');
		return false;
	}
	if ((id('login').value.length<6) || (!id('login').value.match(/^[0-9a-zA-Z]+$/))) {
		alert('Login too short or contains unsupported chars');
		return false;
	}
	
}
