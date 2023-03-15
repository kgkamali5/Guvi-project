const loginForm = document.getElementById("login-form");
loginForm.addEventListener("submit", (event) => {
	event.preventDefault();
	const email = loginForm.email.value;
	const password = loginForm.password.value;
	fetch("login.html", {
		method: "POST",
		body: JSON.stringify({ email, password }),
		headers: {
			"Content-Type": "application/json",
		},
	})
		.then((response) => response.json())
		.then((data) => {
			if (data.success) {
				window.location.href = "profile.html";
			} else {
				alert(data.message);
			}
		});
});
