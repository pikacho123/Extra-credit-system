<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['uid'])) {
    $uid = $_GET['uid'];
    $sql = "SELECT stud_doc_uploaded FROM student WHERE stud_uid = {$uid}";
    $result = pg_query($conn, $sql);
    $row = pg_fetch_assoc($result);
    header('Content-type: application/pdf');
    echo $row['stud_doc_uploaded'];
}
?>
