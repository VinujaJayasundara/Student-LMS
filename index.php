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
  <a class="navbar-brand" href="index.php">
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

<div class="container">
    <div class="row">
        <!-- Text and Buttons in one column -->
        <div class="col-md-6 text-and-buttons-column">
            <div class="text-and-buttons pt-5">
                <p >General Sir John Kotelawala Defence University BSc (Hons) Software Engineering Degree Student Management System</p>
                <div class="btn-container">
                    <button type="button" class="btn btn-success">Login</button>
                    <button type="button" class="btn btn-primary">Register</button>
                </div>
            </div>
        </div>
        <!-- Image in one column -->
        <div class="col-md-6 image-column">
            <img src="image/student.png" alt="Image" class="img-fluid">
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
