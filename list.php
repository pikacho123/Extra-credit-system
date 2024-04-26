<?php

   include "Connection.php";
   $courses = $_POST['course'];
   $uid = $_COOKIE["uid"];
   
   $sum = 0;
   $i = 0;
   $c = "";
   while($i < count($courses))
   {
      $c = $c . $courses[$i] . ",";
     // $sum += $courses[$i]['credits'];
      $i++;
   }

   if(isset($courses[0]) && isset($courses[1]) && isset($courses[2]))
   {
      $sum=8;  
   }
   elseif(isset($courses[0]) && isset($courses[3]) && isset($courses[4]))
   {
      $sum=8; 
   }
   elseif(isset($courses[1]) && isset($courses[2]) && isset($courses[3]) && isset($courses[4]))
   {
      $sum=8;
   }
   elseif(isset($courses[0]) &&isset($courses[1]) && isset($courses[2]) && isset($courses[3]) && isset($courses[4]))
   {
      $sum=12;
   } 
   else
   {
      $sum=20;
      // echo"<script type='text/javascript'> alert('Please Select only * credits') </script>";
   }

  if($sum>8)
  {
   echo"<script type='text/javascript'> alert('Please Select only * credits') </script>";
  }
  else
  {
   $query="update student set stud_course_select = '$c' where stud_uid = $uid";
   echo $query;
   $res = pg_query($conn,$query);

   if($res)
   {
      echo"Values Inserted succesfully <br>";
   }
  }
    
   

?>