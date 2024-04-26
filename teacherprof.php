<head>
	<link rel="stylesheet" type="text/css" href="teacherprof.css">
       </head>

       <body>
	   <div class="sidebar">
	 <h2>Teacher</h2>
    <ul>
      <li><a href="teacher_dash.html">Home</a></li>
      <li><a href="teacherprof.php">Profile</a></li>
      <li><a href="approve.php">Certification</a></li>
      <li><a href="onboarding.html">Logout</a></li>
    </ul>
  </div>
	       <main>
		       <div class="main">
			       <div class="profile">
				       <h1>profile</h1>
				       <div class="card">
					       <div class="card-body">
						       <i class="fa-pen fa-xs edit"></i>
							   <?php
echo "hello";
include "connection.php";

// get the user ID from the URL parameter
$username= $_COOKIE['username'];
						   
// fetch the user details from the database
$sql = "SELECT * FROM teacher WHERE teach_empid = $username";
$result = pg_query($conn, $sql);
$row = pg_fetch_assoc($result);

?>							   

						       <table>
							       <tbody>
								       <tr>
									       <td>Name</td>
									       <td>: <?php echo $row['teach_name']?></td>
									       <td><td>
								       </tr>
									   <tr>
										  <td>EmployeeID</td>
										  <td>: <?php echo $row['teach_empid']?></td>
										  <td></td>
									</tr>
									<tr>
									       <td>Mobile number</td>
									       <td>: <?php echo $row['teach_mob_no']?><td>
									       <td></td>
								      
								        </tr>
								       <tr>
									       <td>Email</td>
                                           <td>: <?php echo $row['teach_email']?><td>
									       <td></td>
								       </tr>
								      
								     </tbody>
						       </table>
					       </div>



