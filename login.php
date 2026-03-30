<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
        <li class="nav-item px-5">
          <a class="nav-link" href="#">Student</a>
        </li>
        <li class="nav-item px-5">
          <a class="nav-link" href="#">Course</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php" style="color: green;">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Header End -->

<!-- Image in center -->
<div class="container">
    <div class="centered-image">
        <img src="image/foc.png" alt="Centered Image">
    </div>
</div>

<center>
<div class="page-wrappers login-body full-row bg-gray">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Login Form</h1>
								<p class="account-subtitle"><?php 
								error_reporting(0);
								session_start();
								session_destroy();
								echo $_SESSION['loginMessage'];
								?></p>
								
								<!-- Form -->
								<form action="login_check.php" method="POST" class="login_form">
									<div class="form-group">
										<lable><h6>User Name</h6></lable>
										<input type="text"  name="username" class="form-control" placeholder="Your UserName*">
									</div>
									<div class="form-group">
									<lable><h6>Password</h6></lable>
										<input type="password" name="password"  class="form-control" placeholder="Your Password">
									</div>
										<button class="btn btn-success" name="login" value="Login" type="submit">Login</button>
								</form>
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								</div>
								<div class="text-center dont-have">Don't have an account? <a href="register.php">Register</a></div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</center>

	<!-- Bootstrap JS and dependencies (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
