<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" type="text/css" href="Tforgotpass.css">
</head>
<body>
    <div class="page-center">
        <div class="forgot-password-container">
            <h2>Forgot Password</h2>
            <p>Please enter your email or username to reset your password:</p>
            <form id="forgot-password-form" action="Tforgotpass.php" method="POST">
                <label for="email">Email or Username:</label>
                <input type="text" id="email" name ="email" placeholder="Enter your email or username" required>
                <button type="submit" id="reset-password-btn">Reset Password</button>
            </form>
        </div>
    </div>
</body>
</html>
