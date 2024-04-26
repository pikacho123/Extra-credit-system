<head>
	<link rel="stylesheet" type="text/css" href="prof.css">
       </head>

       <body>
	       <header>
		       <a href="dash.php">Home</a>
		       <a href="prof.php">Profile</a>
		       <a href="list.html">List of Courses</a>
			   <a href="selectcourse.php">Certificates</a>
		       <a href="onboarding.html">Log out</a>
	       </header>
	       <main>
		       <div class="main">
			       <div class="profile">
				       <h1>Profile</h1>
				       <div class="card">
					       <div class="card-body">
						       <i class="fa-pen fa-xs edit"></i>
<?php
include "connection.php";

// get the user ID from the URL parameter
$uid = $_COOKIE['uid'];
						   
// fetch the user details from the database
$sql = "SELECT * FROM student WHERE stud_uid = $uid";
$result = pg_query($conn, $sql/*"SELECT * FROM student WHERE stud_uid = '$uid'"*/);
$row = pg_fetch_assoc($result);

?>
						       <table>
							       <tbody>
								       <tr>
									       <td>Name</td>
									       <td>:  <?php echo $row['stud_name']?></td>
									       <td><td>
								       </tr>
								       <tr>
									       <td>Email</td>
                                          <td>: <?php echo $row['stud_email']?><td>
									       <td></td>
								       </tr>
								       <tr>
									       <td>Phone number</td>
									       <td>: <?php echo $row['stud_mob_no']?><td>
									       <td></td>
								       </tr>
								       <tr>
									       <td>Academic Year</td>
									       <td>: <?php echo $row['stud_acadyear']?></td>
									       <td></td>
								       </tr>
								       <tr>
									       <td>Gender</td>
									       <td>: <?php echo $row['stud_gender']?></td>
									       <td></td>
								       </tr>
								       <tr>
									       <td>Roll Number</td>
									       <td>: <?php echo $row['stud_roll_no']?></td>
									       <td></td>
								        </tr>
									<tr>
										<td>UID</td>
										<td>: <?php echo $row['stud_uid']?></td>
										<td></td>
									</tr>
								     </tbody>
						       </table>
					       </div>


