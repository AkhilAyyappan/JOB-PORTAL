<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
<div class="main-section1">
    <h2>Job Portal</h2>
  </div>
    <div class="container">
      <h2>Login</h2>
    <form action='config.php' method="POST">
  <div class="mb-3">
    <label for="email"class="form-label">Email address</label>
    <input type="email"class="form-control" id="email" aria-describedby="emailHelp"name="email">
  </div>
  <div class="mb-3">
    <label for="password"class="form-label">Password</label>
    <input type="password" class="form-control"id="password"name="password">
  </div>
  <button type="submit" class="btn btn-primary"name="Login">Login</button>
  <br>New User?<a href="register.php">Register</a>
</form>
    </div>
</body>
</html> 