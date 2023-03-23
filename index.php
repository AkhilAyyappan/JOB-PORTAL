<?php include  'header.php'?>

<!-- Page content -->
<div class="content">
<p>

  <button class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
   Post Jobs
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action='config.php' method="POST">
  <div class="mb-3">
    <label for="cname"class="form-label">Company Name</label>
    <input type="text"class="form-control" id="cname"name="cname" required>
  </div>
  <div class="mb-3">
    <label for="position"class="form-label">Position</label>
    <input type="text" class="form-control" id="position"name="position" required>
  </div>
  <div class="mb-3">
    <label for="Jdesc"class="form-label">Job Description</label>
    <input type="text"class="form-control"  id="Jdesc"name="Jdesc" required>
  </div>
  <div class="mb-3">
    <label for="skills"class="form-label">Skills Required</label>
    <input type="text"class="form-control" id="skills" name="skills" required>
  </div>
  <div class="mb-3">
    <label for="CTC"class="form-label">CTC</label>
    <input type="text"class="form-control" id="CTC"name="CTC" required>
  </div>
  <button type="submit" class="btn btn-success"name="job">Submit</button>
</form>
</div>
</div>
<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
    <?php 

        $sql="SELECT cname,position,CTC from pjobs";
        $result=mysqli_query($conn,$sql);
        $i=0;
        if($result->num_rows>0){
     
            while($rows = $result->fetch_assoc()){
              echo '
              <tr>
              <th scope="row">' .++$i. '</th>
              <td>' .$rows['cname'].'</td>
              <td>' .$rows['position'].'</td>
              <td>' .$rows['CTC'].'</td>
             </tr>';}}
            
          
        else {
          echo "No Results";
        }
       
       ?>
                 
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>