// Get the form element
const form = document.querySelector('form');

// Get the form fields
const nameInput = form.querySelector('#name');
const emailInput = form.querySelector('#email');
const courseInput = form.querySelector('#course');
const certificationInput = form.querySelector('#certification');

// Get the error elements
const nameError = form.querySelector('#name-error');
const emailError = form.querySelector('#email-error');
const courseError = form.querySelector('#course-error');
const certificationError = form.querySelector('#certification-error');

// Validate the form fields on submit
form.addEventListener('submit', (event) => {
  // Prevent the form from submitting
  event.preventDefault();

  // Reset the error messages
  nameError.textContent = '';
  emailError.textContent = '';
  courseError.textContent = '';
  certificationError.textContent = '';

  // Validate the name field
  if (nameInput.value.trim() === '') {
    nameError.textContent = 'Please enter your name';
    nameInput.focus();
    return;
  }

  // Validate the email field
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(emailInput.value)) {
    emailError.textContent = 'Please enter a valid email address';
    emailInput.focus();
    return;
  }

  // Validate the course field
  if (courseInput.value === '') {
    courseError.textContent = 'Please select a course';
    courseInput.focus();
    return;
  }

  // Validate the certification field
  if (certificationInput.value !== '' && !certificationInput.files[0].name.match(/\.(pdf|doc|docx)$/i)) {
    certificationError.textContent = 'Please upload a valid PDF or Word document';
    certificationInput.focus();
    return;
  }

  // Submit the form
  form.submit();
});
