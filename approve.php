<html>
<head>
	<title>Certification</title>
    <link rel="stylesheet" href="approve.css">
    <style>
        /* CSS for the sidebar */
        .sidebar {
            height: 100vh;
            width: 200px;
            background-color: #358d9d;
            position: fixed;
            top: 0;
            left: 0;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 10px;
            display: block;
            color: white;
        }

        .sidebar a:hover {
            background-color: #0d8b98;
        }

        /* CSS for the content area */
        .content {
            margin-left: 200px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Teacher</h2>
        <ul>
          <li><a href="teacher_dash.html">Home</a></li>
          <li><a href="teacherprof.php">Profile</a></li>
          <li><a href="approve.php">Certification</a></li>
          <li><a href="onboarding.html">Logout</a></li>
        </ul>
      </div>

      <?php
include "connection.php";
$uid = $_COOKIE['uid'];
      
// fetch all the student data from the database
$sql = "SELECT * FROM student ";
$result = pg_query($conn, $sql);
?>

<table>
  <tr>
    <th>Roll No</th>
    <th>Student Name</th>
    <th>Student UID</th>
    <th>courses</th>
    <th>Actions</th>
    <th>Status</th>
  </tr>
  <?php while ($row = pg_fetch_assoc($result)) { ?>
    <tr>
      <td><?php echo $row['stud_name']; ?></td>
      <td><?php echo $row['stud_roll_no']; ?></td>
      <td><?php echo $row['stud_uid']; ?></td>
      <td><?php echo $row['stud_course_select']; ?></td>
      <td><a href="<?php echo $row['stud_doc_uploaded']; ?>">View Certificate</a></td>
      <td>
        <?php if ($row['status'] == 'Approved') {
          echo "<button disabled>Approved</button>";
        } else { ?>
          <form method="post" action="confirm.php">
            <input type="hidden" name="stud_uid" value="<?php echo $row['stud_uid']; ?>">
            <button type="submit" name="approve">Approve</button>
          </form>
        <?php } ?>
      </td>
    </tr>
  <?php } ?>
</table>

      
