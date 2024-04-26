
<html>
   <head>
      <title>Student Registration</title>
      <link rel="stylesheet" type="text/css" href="signup.css">
  <script src="jquery-3.6.3.min.js"></script>

   </head>
   <body>
     <h1>Student Registration</h1>
	
     <div class="form">
     <form id="registration-form" action="signup.php" method="POST">
	 <div>
	   <label for="name">Name:</label>
	   <input type="text" id="name" name="name" required>
           <span id="nameMsg"></span>
	 </div>
	 <div>
		 <label for="rollno">Roll No:</label>
		 <input type="text" id="rollno" name="rollno" required>
                  <span id="rollnoMsg"></span>

	 </div>
	<div>
		 <label for="dob">Date of Birth:</label>
		 <input type="date" id="dob" name="dob" required>
                

	 </div> 
	<div>
		 <label for="gender">Gender:</label>
		 <select id="gender" name="gender" required>
			 <option value="">Select</option>
			 <option value="male">Male</option>
			 <option value="female">Female</option>
			 <option value="other">Other</option>
		 </select>
	</div>
	<div> 
           <label for="mobile">Mobile Number:</label>
	   <input type="tel" id="mobile" name="mobile" required>
           <span id="mobileMsg"></span>

	 </div>
	<div>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>
                <span id="emailMsg"></span>

	</div>
	 <div>
		 <label for="acadyear">Academic Year:</label>
		 <input type="text" id="acadyear" name="acadyear" required>
       
         </div> 
	 <div>
	   <label for="department">Department:</label>
	   <input type="text" id="department" name="department" required>
	 </div>
		<div>
		<label for="uid">UID:</label>
		<input type="text" id="uid" name="uid" required>
                 <span id="uidMsg"></span>
	
</div>	 
	<div>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>
                 <span id="passwordMsg"></span>
 	
</div>

	<div>
		<input type="submit" value="Sign Up">
		<a href="login.html"> login</a>
	</div>
     </div>
	
     </form>
   </body>
</html>

<?php

include "Connection.php";
$name = $_POST['name'];
   $rollno = $_POST['rollno'];
   $dob = $_POST['dob'];
   $gender = $_POST['gender'];
   $mobilenumber = preg_replace("/[^0-9]/", "", $_POST['mobile']);	
   
   $email = $_POST['email'];
   $acadyear = $_POST['acadyear'];
   $department = $_POST['department'];
   $uid = $_POST['uid'];
   $password= $_POST['password'];

   $query="INSERT INTO student (stud_name,stud_roll_no,stud_dob,stud_gender,stud_mob_no,stud_email,stud_acadyear,stud_dept,stud_uid,stud_pass)
   VALUES('$name','$rollno','$dob','$gender','$mobilenumber','$email','$acadyear','$department','$uid','$password')";
   
echo $query;
	
   
   $res = pg_query($conn,$query);

   if($res)
   {
      echo"Values Inserted succesfully <br>";
   }
   

?>