<?php

// Initialize variables
$error = "";
$msg = "";

// Database connection
$host = "localhost";
$user = "root";
$password = "";
$db = "SMSDB";

$data = mysqli_connect($host, $user, $password, $db);

// Check if registration number is provided
if(isset($_GET['registration_number'])) {
    $id = $_GET['registration_number'];
    // Query to fetch course information for the given registration number
    $sql = "SELECT * FROM course WHERE registration_number='$id'";
    $result = mysqli_query($data, $sql);

    // Check if any result is found
    if(mysqli_num_rows($result) > 0) {
        $info = mysqli_fetch_assoc($result); // Fetch the first row
    } else {
        $info = false; // Set info to false if no data found
    }
} else {
    // If registration number is not provided in the URL
    $info = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

    <style type="text/css">
        .table_th {
            padding: 20px;
            font-size: 10px;
        }
        .table_td {
            padding: 20px;
            background-color: skyblue;
        }
    </style>
</head>
<body>

<!-- Header -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
  <a class="navbar-brand" href="#">
      <img src="image/logo.png" alt="Logo" height="30" class="d-inline-block align-top">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse px-2" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item px-5">
          <a class="nav-link" href="adminhome.php">Home</a>
        </li>
		<li class="nav-item dropdown px-5">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Student</a>
			<ul class="dropdown-menu">
				<li class="nav-item"> <a class="nav-link" href="add_student.php">Add Student</a> </li>
				<li class="nav-item"> <a class="nav-link" href="view_student.php">View Student</a> </li>
			</ul>
        </li>
        <li class="nav-item dropdown px-5">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Course</a>
			<ul class="dropdown-menu">
				<li class="nav-item"> <a class="nav-link" href="add_course.php">Add Course</a> </li>
				<li class="nav-item"> <a class="nav-link" href="view_course.php">View Course</a> </li>
			</ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" style="color: green;">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Header End -->

<!-- Sidebar -->
<div class="sidebar">
    <a href="#">
        <img src="image/profile.png" alt="Admin Logo" height="100" class="d-inline-block align-top">
        <br>Admin
    </a>
    <a href="#">Settings</a>
    <a href="#">Change Password</a>
    <a href="logout.php" style="color: green;">Logout</a>
</div>
<!-- Sidebar End -->

<!-- Main Content -->
<div class="main">
    <div class="content">
        <?php
        if($info) {
            echo "<h5 class='alert alert-success'>{$info['registration_number']}</h5> ";
        } else {
            echo "<h5 class='alert alert-warning'>Registration number not found</h5> ";
        }
        ?>
        <table border="1px">
            <tr>
                <th class="table_th">Semester</th>
                <th class="table_th">Course ID</th>
                <th class="table_th">Course Name</th>
                <th class="table_th">Marks</th>
                <th class="table_th">Update</th>
            </tr>
            <?php
            // Display course information if available
            if($info) {
                echo "<tr>";
                echo "<td class='table_td'>{$info['semester']}</td>";
                echo "<td class='table_td'>{$info['course_id']}</td>";
                echo "<td class='table_td'>{$info['course_name']}</td>";
                echo "<td class='table_td'>{$info['marks']}</td>";
                echo "<td class='table_td'><a class='btn btn-primary' href='update_marks.php?registration_number={$info['registration_number']}&course_id={$info['course_id']}'>Update</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>

</body>
</html>
