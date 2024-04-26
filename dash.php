<head>
    <link rel="stylesheet" type="text/css" href="dash.css">
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
		       <div class="your courses">
			       <h1>Your Credits</h1>
			       <div class="courses-container">
				       <div class="credits-earned shadow-box">
					       <h3>Credits earned</h3>
					       <p>4</p>
				       </div>
				       <div class="credits-remaining shadow-box">
					       <h3>Credits remaining</h3>
					       <p>4</p>
				       </div>
				       <div class="proofs-uploaded shadow-box">
					       <h3>Total Cretits</h3>
					       <p>8</p>
				       </div>    
		    
                  </div>
				  <?php
				  include "connection.php";
				  
				  // get the user ID from the URL parameter
				  $uid = $_COOKIE['uid'];
											 
				  // fetch the user details from the database
				  $sql = "SELECT * FROM student WHERE stud_uid = $uid";
				  $result = pg_query($conn, $sql/*"SELECT * FROM student WHERE stud_uid = '$uid'"*/);
				  $row = pg_fetch_assoc($result);
				  
				  ?>
					 
					 <div class="course-list">
    <h1>Selected Courses</h1>
    <ul>
        <?php 
            $courses = explode(',', $row['stud_course_select']);
			array_pop($courses);
            foreach ($courses as $course) {
                echo "<li>$course</li>";
            }
        ?>
    </ul>
</div>
				  </body>
				  </html>


		
