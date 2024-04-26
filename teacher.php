<?php
echo "hello";
include "Connection.php";
$username = $_POST['username'];
$password = $_POST['password'];
echo $username;
echo $password."<br>"; 
setcookie("username",$username);
$sql = "SELECT * FROM teacher WHERE teach_empid = '$username'";
$checkpass = pg_query($conn, $sql);
if (pg_num_rows($checkpass) == 0) {
    echo "err";
} else {
    $data = pg_fetch_assoc($checkpass);
    //echo pg_last_error();
    if ($data["teach_pass"] == $password) {
        echo "login success";
        header('location:teacher_dash.html');
    } else {
        echo "login failed";
    }
}
?>
