<?php
      $host="localhost";
      $user="root";
      $password="";
      $db="SMSDB";
  
      $data=mysqli_connect($host,$user,$password,$db);

      $id=$_GET['registration_number'];
      $course_id=$_GET['course_id'];
      $sql="SELECT * FROM course WHERE registration_number='$id'AND course_id= '$course_id'";
      $result=mysqli_query($data,$sql);
      $info=$result->fetch_assoc();


      if(isset($_POST['update']))
      {
        $marks=$_POST['marks'];
      

          $query="UPDATE course set marks='$marks' WHERE registration_number='$id'AND course_id= '$course_id' ";
          $result2=mysqli_query($data,$query);

          if($result2)
        {
           header("location:stCourse.php?registration_number=$id");
           exit();
        }
       

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
    lable
    {
        display: inline-block;
        text-align:right;
        width: 100px;
        padding-top:10px;padding-bottom:10px;
    }
    .div_form
    {
        background-color: #ede6e6;
        width: 800px;
        height: 300px;
        border-radius: 10px;
        padding: 60px;
        text-align: center;
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

<div class="main">
	<div class="content">
		<h5>Update Marks</h5>
        <div>
            <form action="#" method="POST">
               <div>
                    <?php
            echo "<h5 class='alert alert-success'>{$info['registration_number']}</h5> ";
        ?>
               </div>
               <div class="div_form">
               <div>
                    <lable>Course Name</lable>
                    <input type="text" name="course_name" value="<?php echo "{$info['course_name']}";  ?>">
               </div>
               <div>
                    <lable>Course ID</lable>
                    <input type="text" name="course_id" value="<?php echo "{$info['course_id']}";  ?>">
               </div>
               <div>
                    <lable>Marks</lable>
                    <input type="text" name="marks" value="<?php echo "{$info['marks']}";  ?>">
               </div>
               <div>
               <input type="submit" class="btn btn-primary" name= "update" value="Update">
               </div>

            </form>
            </div>
	</div>
  </div>

</body>
</html>
