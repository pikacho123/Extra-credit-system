<?php
include "connection.php";

// Get the uploaded file
$file = $_FILES['certificate'];

// Move the uploaded file to a directory on your server
$target_dir = "uploads/";
$target_file = $target_dir . basename($file["name"]);
move_uploaded_file($file["tmp_name"], $target_file);

// Update the stud_doc_uploaded column in the student table
$course = $_POST['course'];
$uid = $_COOKIE["uid"];
$sql ="UPDATE student SET stud_doc_uploaded = 'uploads/' WHERE stud_uid = '$uid' AND stud_course_select LIKE '%$course%'";

$result = pg_query($conn, $sql);

if ($result) {
    echo "Certificate uploaded successfully!";
} else {
    echo "Error uploading certificate: " . pg_last_error($conn);
}
?>
