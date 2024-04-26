<?php
$conn=pg_connect("host=192.168.16.252 user=BG20 dbname=BG20 password=");
        echo "connected"
if(!$conn){
	echo "Not connected";
}
else
{

	if(isset($_POST['login']))
	{
		
		
		$e=$_POST['email'];
	
		$p=$_POST['pass'];
                      
		$q="SELECT * FROM student WHERE stud_uid='$uid' AND stud_pass='$password'";
		$exec=pg_query($conn,$q);
		$no_of_rows=pg_num_rows($exec);
		$row=pg_fetch_assoc($exec);
                echo $row['stud_uid'];
                if($row=1)
	        {
		 header("Location:dash.html"); 
		
		}
		else{
		
		echo"Not validated";
		}
       }
}
?>
