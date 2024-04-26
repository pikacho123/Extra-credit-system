<!--<html>
<head>
	<link rel="stylesheet" type+"text/css" href="login.css">
</head>
<body>
	<div class="page-center"><div>
	<div class="login-container">
		<form id="login-form" action="" method="POST">
			<h2>Student Login</h2>
			<label for="UID">UID:</label>
			<input type="text" id="UID" placeholder="Enter your UID" name="username"required>
			<label for="password">Password:</label>
			<input type="password" id="password" placeholder="Enter your password" name="password"required>
			<button type="submit" id="login-btn" name="login">Log In</button>
			<div id="error-message"></div>
			<p> Don't have an account?<a href="signup.php">Sign Up</a></p>
			
		</form>
	</div>

	<script type="text/javascript" src="login.js"></script>
</body>
</html>-->

<?php
include "Connection.php";

// Check if UID and password are set
if (isset($_POST['UID']) && isset($_POST['password'])) {
    $uid = $_POST['UID'];
    $pass = $_POST['password'];
    echo $uid;
    echo $pass."<br>"; 
    setcookie("uid",$uid);
    $sql = "SELECT * FROM student WHERE stud_uid = '$uid'";
    $checkpass = pg_query($conn, $sql);
    
    // Check if query was successful
    if ($checkpass !== false) {
        if (pg_num_rows($checkpass) == 0) {
            echo "err";
        } else {
            $data = pg_fetch_assoc($checkpass);
            if ($data["stud_pass"] == $pass) {
                setcookie("stud_uid", $uid, time() + (86400 * 30), "/");
                echo "login success";
                header('location: dash.php');
            } else {
                echo "login failed";
            }
        }
    } else {
        echo "Error: " . pg_last_error($conn);
    }
} else {
    echo "Error: UID or password not set.";
}
?>

