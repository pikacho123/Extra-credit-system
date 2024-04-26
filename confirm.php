<?php
				  include "connection.php";
				  
				  // get the user ID from the URL parameter
				  $uid = $_COOKIE['uid'];

// Update the student record with an "approved" status
$query = "UPDATE student SET status='approved' WHERE stud_uid=$uid";
$result = pg_query($conn, $query);

// Check if the update was successful
if ($result) {
  echo "Student record updated successfully.";
} else {
  echo "Error updating student record: " . pg_last_error($conn);
}

// Close the database connection
pg_close($conn);
?>
