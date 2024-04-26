<?php
   $name = $_POST['stud_name'];
   $rollno = $_POST['stud_roll_no'];
   $dob = $_POST['stud_dob'];
   $gender = $_POST['stud_gender'];
   $mobilenumber = $_POST['stud_mob_no'];
   $email = $_POST['stud_email'];
   $acadyear = $_POST['stud_acadyear'];
   $department = $_POST['stud_dept'];
   $uid = $_POST['stud_uid'];
   $password= $_POST['std_pass'];
   
  

   //$connect = pg_connect("host=localhostuser=BG20 password= dbname=BG20") or die("Unable to connect");
  $connect=pg_connect("host=192.168.16.1  dbname=BG20 user=BG20 password= ") or die("Unable to connect");

   if($connect)
   {
      echo"Connected <br>";
   }
   $query="INSERT INTO student (stud_name,stud_roll_no,stud_dob,stud_gender,stud_mob_no,stud_email,stud_acadyear,stud_dept,stud_uid,std_pass) VALUES('$_POST[stud_name]','$_POST[stud_roll_no]','$_POST[stud_dob]','$_POST[stud_gender]','$_POST[stud_mob_no]','$_POST[stud_email]','$_POST[stud_acadyear]','$_POST[stud_dept]','$_POST[stud_uid]','$_POST[std_pass]')";
   
   $res=pg_query($connect,$query) or die("unable to insert");

   if($res)
   {
      echo"Values Inserted succesfully <br>";
   }

?>   
