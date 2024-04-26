function redirectToLogin() {
	var userType = document.querySelector('input[name="user-type"]:checked').value;
	if (userType === "student") {
		window.location.href = "login.html";
	} else if (userType === "teacher") {
		window.location.href = "teacher.html";
	}
}
