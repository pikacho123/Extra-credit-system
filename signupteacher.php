<!DOCTYPE html>
<html>
<head>
	<title>Teacher Registration Form</title>
	<style>
		/* Add your CSS styles here */
        body {
            background-color: #089eb5;
          }          
		form {
			width: 500px;
			margin: auto;
			background-color: #f9fdfd;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
			font-family: Arial, sans-serif;
			color: #333;
		}
		input, select {
			display: block;
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			margin-bottom: 20px;
			font-size: 16px;
			font-family: Arial, sans-serif;
		}
		label {
			font-weight: bold;
		}
		h2 {
			text-align: center;
			margin-top: 50px;
		}
		button[type="submit"] {
			background-color: #11899e;
			color: #ffffff;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			font-size: 18px;
			cursor: pointer;
			transition: all 0.3s ease;
			margin-top: 20px;
			margin-bottom: 10px;
		}
		button[type="submit"]:hover {
			background-color: #3E8E41;
		}
	</style>
    <script src="signupteacher.js"></script>
</head>
<body>
	<h2>Teacher Registration Form</h2>
	<form action="#" method="POST">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" placeholder="Enter your name" required>

        <label for="employeeid">Employee-ID:</label>
		<input type="employeeid" id="employeeid" name="employeeid" placeholder="Enter your employeeid" required>

        <label for="employee-id">Password:</label>
		<input type="password" id="password" name="password" placeholder="Enter your password" required>

        <label for="mobile">Mobile number:</label>
		<input type="mobile" id="mobile" name="mobile" placeholder="Enter your mobile" required>
		
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" placeholder="Enter your email" required>
		
		
		<label for="department">Department:</label>
		<select id="department" name="department" required>
			<option value="" disabled selected>Select your department</option>
			<option value="Computer Science">Computer Science</option>
			<option value="Mathematics">Mathematics</option>
			<option value="Physics">Physics</option>
			<option value="Chemistry">Chemistry</option>
		</select>
		<button type="submit">Register</button>
		<a href="teacher.html"> login</a>
	</form>
</body>
</html>

<?php

include "Connection.php";
   $name = $_POST['name'];
   $employeeid = $_POST['employeeid'];
   $password= $_POST['password'];
   $mobile = preg_replace("/[^0-9]/", "", $_POST['mobile']);	
   $email = $_POST['email'];
   $department = $_POST['department'];
   

   $query="INSERT INTO teacher (teach_name, teach_empid,teach_pass,teach_mob_no,teach_email,teach_dept)
   VALUES('$name',' $employeeid','$password','$mobile','$email','$department')";
   
echo $query;
	
   
   $res = pg_query($conn,$query);

   if($res)
   {
      echo"Values Inserted succesfully <br>";
   }
   

?>
