<?php include_once 'includes/dbh.inc.php'; ?>
<?php
  $username=$_POST['username'];
  $password=$_POST['password'];
  $dob=$_POST['dateofbirth'];
  $user = "user";

  $sql="insert into login values('$username','$password','$user','$dob');";
  $result=mysqli_query($conn,$sql); 
   
  header('Location: login.php');
  exit;
?>