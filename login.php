<?php include_once 'includes/dbh.inc.php'; ?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="loginsheet.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body style="background-image:url('image.png');background-repeat: no-repeat;background-size:cover;">
<h1 style="position:absolute; top:2.1%; font-size:50px; color:#22262e"> Electricity Board Portal </h1>
  <div class="container" >
  
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        
        <div class="text">
          
        </div>
      </div>
      <div class="back">
        
        <div class="text">
          
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
        <form action="login.php" method="get">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input name="username" id = "usename" type="text"  placeholder="Enter your username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input name="password" id="password" type="password"  placeholder="Enter your password" required>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" value="Sumbit">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Signup</div>
        <form action="signup.php" method="post">>
            <div class="input-boxes">
              
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input name="username" id = "usename" type="text" placeholder="Enter your username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input name="password" id="password" type="password" placeholder="Enter your password" required>
              </div>
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input name="dateofbirth" id="dateofbirth" type="date" placeholder="Enter your DOB" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Submit">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
<?php
if (empty($_GET)){
}
else{
  $username=$_GET['username'];
  $password=$_GET['password'];
  $sql="select * from login where username='$username'and password='$password';";
  $result = mysqli_query($conn, $sql);
  $role=mysqli_fetch_assoc($result)['role']; 
  print_r($role);
  session_start();
  $_SESSION['username'] = $username; 
  if (mysqli_num_rows($result) === 1) {
    if($role=="user"){
    header('Location: user.php');
    exit;
    }
    else{
    header('Location: admin.php');
    exit;
    }
  }
  else{
    echo '<script type ="text/JavaScript">'; 
    echo 'alert("not correct")  ';  
    echo '</script>';  
  }
}
  ?>
</body>
</html>
 
</body>
</html>
