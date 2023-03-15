const form = document.getElementById('registration-form');

form.addEventListener('submit', (e) => {
	e.preventDefault(); // prevent form submission
	const username = document.getElementById('username').value;
	const email = document.getElementById('email').value;
	const password = document.getElementById('password').value;

	// perform validation on user input
	if (username === '') {
		alert('Please enter a username');
		return;
	}

	if (email === '') {
		alert('Please enter an email address');
		return;
	}

	if (password === '') {
		alert('Please enter a password');
		return;
	}

	alert(`Thank you for registering, ${username}!`);
});
