// Get the input fields and button
const username = document.getElementById('username');
const password = document.getElementById('password');
const loginBtn = document.getElementById('login-btn');

// Add event listener to the login button
loginBtn.addEventListener('click', () => {
  // Get the values of the input fields
  const usernameValue = username.value.trim();
  const passwordValue = password.value.trim();

  // Validate the inputs
  if (usernameValue === '' || passwordValue === '') {
    alert('Please enter your username and password');
  } else if (usernameValue !== 'your_username' || passwordValue !== 'your_password') {
    alert('Incorrect username or password');
  } else {
    alert('Login successful!');
    // Redirect to the dashboard or home page
    window.location.href = 'teacher_dashb.html';
  }
});
