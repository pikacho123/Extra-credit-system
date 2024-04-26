<script>
    const form = document.querySelector('form');
    const nameInput = document.querySelector('#name');
    const employeeIdInput = document.querySelector('#employee-id');
    const passwordInput = document.querySelector('#password');
    const mobileInput = document.querySelector('#mobile');
    const emailInput = document.querySelector('#email');
    const departmentInput = document.querySelector('#department');
    const errorElement = document.querySelector('#error-message');

    form.addEventListener('submit', (event) => {
        let messages = [];

        if (nameInput.value === '' || nameInput.value == null) {
            messages.push('Name is required');
        }

        if (employeeIdInput.value === '' || employeeIdInput.value == null) {
            messages.push('Employee ID is required');
        }

        if (passwordInput.value === '' || passwordInput.value == null) {
            messages.push('Password is required');
        }

        if (mobileInput.value === '' || mobileInput.value == null) {
            messages.push('Mobile number is required');
        } else if (isNaN(mobileInput.value)) {
            messages.push('Mobile number should contain digits only');
        } else if (mobileInput.value.length !== 10) {
            messages.push('Mobile number should contain 10 digits');
        }

        if (emailInput.value === '' || emailInput.value == null) {
            messages.push('Email is required');
        } else if (!emailInput.value.includes('@')) {
            messages.push('Email is invalid');
        }

        if (departmentInput.value === '' || departmentInput.value == null) {
            messages.push('Department is required');
        }

        if (messages.length > 0) {
            event.preventDefault();
            errorElement.innerText = messages.join(', ');
        }
    });
</script>
