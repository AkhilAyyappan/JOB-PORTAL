<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <link rel="shortcut icon" href=" " type="image/x-icon">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Register</title>
</head>
<body>
  <div class="main-section1">
    <h2>Job Portal</h2>
  </div>
    <div class="container">
      <h2>Register!!</h2>
    <form action='config.php' method="POST">
    <div class="mb-3">
    <label for="name"class="form-label">Full Name</label>
    <input type="text"class="form-control"id="exampleInputName"name="name" required>
  </div>
  <div class="mb-3">
    <label for="phone"class="form-label">Phone Number</label>
    <input type="text"class="form-control"id="phone"name="phone" required>
  </div>
  <div class="mb-3">
    <label for="email"class="form-label">Email address</label>
    <input type="email" class="form-control"id="email" aria-describedby="emailHelp"name="email"required>
  </div>
  <div class="mb-3">
    <label for="password"class="form-label">Password</label>
    <input type="password" class="form-control"id="password"name="password"required>
  </div>
  <div class="mb-3">
    <label for="cpassword"class="form-label">Confirm Password</label>
    <input type="password"class="form-control"id="cpassword"required>
  </div>
  <button type="submit" class="btn btn-primary"name="submit">Register</button>
  <button type="submit" class="btn btn-warning">Refresh</button>
  <br>Already registered?<a href="login.php">Login</a>
</form>
    </div>
</body>
</html>