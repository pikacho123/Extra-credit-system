<?php
// connect to the database
$dbconn=pg_connect("host=localhost user=postgres dbname=BG20 password='1234'");

// get the user ID from the URL parameter
$user_id = $_GET['uid'];

// fetch the user details from the database
$result = pg_query($dbconn, "SELECT * FROM student WHERE stud_id = $user_id");
$row = pg_fetch_assoc($result);

// display the user details on the page
echo "<h1>User Profile</h1>";
echo "<p>Name: " . $row['name'] . "</p>";
echo "<p>Age: " . $row['age'] . "</p>";
echo "<p>Gender: " . $row['gender'] . "</p>";
echo "<p>Phone Number: " . $row['phone_number'] . "</p>";
?>
