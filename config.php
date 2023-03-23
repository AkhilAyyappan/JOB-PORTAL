<?php

$server='localhost';
$username='root';
$password='';
$database='jobs';
$conn=mysqli_connect($server,$username,$password,$database) or die("Connection Failed:" .mysqli_connect_error());

if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_POST['submit'])){
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone'];
    $password=$_POST['password'];

    $sql="INSERT INTO `users`(`name`, `email`, `password`,`phone`) VALUES ('$name','$email','$password','$number')";
    if(mysqli_query($conn,$sql)){
        echo"Records inserted successfully.";
    }else{
        echo "ERROR: Could not able to execute $sql." .mysqli_error($conn);
    } 
    header("Location:register.php");
}

session_start();
if(isset($_POST['Login'])){
   
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM users WHERE email='".$email."' AND password='".$password."' limit 1";
    $result=mysqli_query($conn,$query);
   
    if(mysqli_num_rows($result)==1){
        header("Location:index.php");
       
    }
    else{
        $error='invalid email id or password';
    }
}

if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_POST['job'])){
   
    $cname=$_POST['cname'];
    $position=$_POST['position'];
    $Jdesc=$_POST['Jdesc'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];

    $sql="INSERT INTO `pjobs`(`cname`, `position`, `Jdesc`, `skills`, `CTC`) VALUES ('$cname','$position','$Jdesc','$skills','$CTC')";
    
    if(mysqli_query($conn,$sql)){
        echo " jobs Posted";
    }
    else{
        echo "ERROR: Failed to post the job $sql." .mysqli_error($conn);
    }
    header("Location:index.php");
}

if($_SERVER['REQUEST_METHOD']=='POST'&& isset($_POST['apply'])){
   
    $name=$_POST['name'];
    $pos=$_POST['pos'];
    $year=$_POST['year'];

    $sql="INSERT INTO `candidates`(`name`, `pos`, `year`) VALUES ('$name','$pos','$year')";
    
    if(mysqli_query($conn,$sql)){
        echo " Applied";
        header("Location:career.php");
    }
    else{
        echo "ERROR: Failed to apply $sql." .mysqli_error($conn);
    }
  
}
?>