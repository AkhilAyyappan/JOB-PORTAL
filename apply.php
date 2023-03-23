<!DOCTYPE html>
<?php include 'config.php'?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    
<div class="main-section1">
<h1>Apply for Job</h1>
</div>
  <div class="container">
        <form action='config.php' method="POST">
            <div class="mb-3">
               <label for="name"class="form-label">Full Name</label><br>
               <input type="text"class="form-control" id="name"name="name" required>
            </div>
            <div class="mb-3">
               <label for="pos"class="form-label">Position</label><br>
               <input type="text" class="form-control" id="pos"name="pos" required>
            </div>
            <div class="mb-3">
               <label for="year"class="form-label">Passout Year</label><br>
               <input type="number"class="form-control"  id="year"name="year" required>
           </div>
           <button type="submit" class="btn btn-secondary"name="apply">Submit</button>
        </form>
    </div>

</body>
</html>