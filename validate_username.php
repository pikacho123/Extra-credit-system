<?php
include 'connection.php';
 
if(isset($_POST['username'])){
    $uid =$_POST['uid'];
    $query = "SELECT * FROM student WHERE uid='".$uid."'";
    $result = pg_query($con,$query);
    echo pg_num_rows($result);
}
?>
