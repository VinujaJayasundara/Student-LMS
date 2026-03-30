<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
	
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
          <a class="nav-link" href="index.php">Home</a>
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
<h5>View Student List</h5>
<center>
    <!-- Tiles -->
    <div class="row">
        <div class="col-md-3">
            <div class="tile">
                <h3>Intake 38</h3>
                <p>60</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="tile">
                <h3>Intake 39</h3>
                <p>90</p>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-md-3">
            <div class="tile">
                <h3>Intake 40</h3>
                <p>50</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="tile">
                <h3>Intake 41</h3>
                <p>80</p>
            </div>
        </div>
    </div>
    <!-- Tiles End -->
</div>
</center>
<!-- Main Content End -->

<!-- Bootstrap JS (Optional) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
