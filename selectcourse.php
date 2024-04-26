<!DOCTYPE html>
<html>
<head>
	<title>Selected Courses</title>
	<link rel="stylesheet" type="text/css" href="selectc.css">
</head>
<body>
	<header>
		<a href="dash.php">Home</a>
		<a href="prof.php">Profile</a>
		<a href="list.html">List of Courses</a>
        <a href="selectcourse.php">Certificates</a>
		<a href="onboarding.html">Log Out</a>
	</header>
	<main>
		<div class="col-4">
			<div class="selected-courses">
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
									<h1>Student</h1>
								       <tr>
									       <td>Name</td>
									       <td>:</td>
									       <td><?php echo $row['stud_name']?><td>
								       </tr>
									   <tr>
									       <td>Roll Number</td>
									       <td>:</td>
									       <td><?php echo $row['stud_roll_no']?></td>
								        </tr>
									<tr>
										<td>UID</td>
										<td>:</td>
										<td><?php echo $row['stud_uid']?></td>
									</tr>	
									<div>
									
    </div>
    </div>
	</main>
	<div class="course-list">
	<table>
		<thead>
			<tr>
				<th>Course</th>
				<th>Action</th>
			    <th>status</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$courses = explode(',', $row['stud_course_select']);
			array_pop($courses);
			foreach ($courses as $course) {
				echo "<tr>";
				echo "<td>$course</td>";
				echo "<td>";
				echo "<form class='upload-form' action='certify.php' method='post' enctype='multipart/form-data'>";
				echo "<input type='hidden' name='course' value='$course'>";
				
				echo "<label for='certificate'>Upload Certificate:</label>";
				echo "<input type='file' id='certificate' name='certificate'>";
				echo "<button type='submit'>Upload</button>";
				echo "</form>";
				echo "</td>";
				echo "<td>";
				if (isset($status_array[$course])) {
					$status = $status_array[$course];
					// Display "approve" tick if status is approved
					if ($status == "Approved") {
						echo "<img src='approve.png' alt='Approved'>";
					} else {
						echo $status;
					}
				} else {
					echo "Pending";
				}
				echo "</td>";
				echo "</tr>";
			}
			?>
		</tbody>
	</table>
</div>
</body>
</html>


