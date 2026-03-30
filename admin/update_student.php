<?php
      $host="localhost";
      $user="root";
      $password="";
      $db="SMSDB";
  
      $data=mysqli_connect($host,$user,$password,$db);

      $id=$_GET['registration_number'];
      $sql="SELECT * FROM students WHERE registration_number='$id'";
      $result=mysqli_query($data,$sql);
      $info=$result->fetch_assoc();


      if(isset($_POST['update']))
      {
        $rN=$_POST['RN'];
        $fName=$_POST['FirstName'];
        $lName=$_POST['LastName'];
        $dob=$_POST['dob'];
        $gender=$_POST['Gender'];
        $email=$_POST['email'];
        $intake=$_POST['intake'];
        $phone=$_POST['phone'];
        $degree=$_POST['degree'];

          $query="UPDATE students set registration_number='$rN',firstname='$fName',lastname='$lName',dob='$dob',gender='$gender',email='$email',phone='$phone',intake='$intake',degree='$degree' WHERE registration_number='$id'";
          $result2=mysqli_query($data,$query);

          if($result2)
        {
           header("location:view_student.php");
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
        height: 450px;
        border-radius: 10px;
        padding: 5px;
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
    <h5>Add Student</h5>
		<center>
        <div class="div_form">
            <form action="#" method="POST">
               <div>
                    <lable>Reg. Number</lable>
                    <input type="text" name="RN" value="<?php echo "{$info['registration_number']}";  ?>">
               </div>
               <div>
                    <lable>First Name</lable>
                    <input type="text" name="FirstName" value="<?php echo "{$info['firstname']}";  ?>">
               </div>
               <div>
                    <lable>Last Name</lable>
                    <input type="text" name="LastName" value="<?php echo "{$info['lastname']}";  ?>">
               </div>
               <div>
                    <lable>DOB</lable>
                    <input type="date" name="dob" value="<?php echo "{$info['dob']}";  ?>">
               </div>
               <div>
                    <lable>Gender</lable>
                    <input type="text" name="Gender" value=" <?php echo "{$info['gender']}";  ?>">
               </div>
               <div>
                    <lable>Email</lable>
                    <input type="email" name="email" value="<?php echo "{$info['email']}";  ?>">
               </div>
               <div>
                    <lable>Phone</lable>
                    <input type="text" name="phone" value="<?php echo "{$info['phone']}";  ?>">
               </div>
               <div>
                    <lable>Intake</lable>
                    <input type="text" name="intake" value="<?php echo "{$info['intake']}";  ?>">
               </div>
               <div>
                    <lable>Degree</lable>
                    <input type="text" name="degree" value="<?php echo "{$info['degree']}";  ?>">
               </div>
               <div>
               <input type="submit" class="btn btn-primary" name= "update" value="Update">
               </div>

            </form>
        </div>
</center>
</div>
</body>
</html>
