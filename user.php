<?php
 	include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Profile Page</title>

    <meta name="author" content="Codeconvey" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>

    <link rel="stylesheet" href="css/demo.css" />
    
	    <link rel="stylesheet" href="css/style.css">
		
		<style>

a.fixed {

position: fixed;

right:5;

top: 0;

       }
	   
a.fixedl{

position: fixed;

left:6;

top: 0;

       }
	   
	   </style>
</head>
<body>
		
<div class="ScriptTop">
    <div class="rt-container">
        <div class="col-rt-0" id="float-right">
        <form action="bill1.php" method="get">
        <li><button  type = "submit" class='fixed' id = "bill_button" >Bill</button></li>
        </div>
        <div class="col-rt-0" id="float-right">
            <ul>
                <li><a class='fixed' href="announcement.php" title="Announcementview">ANNOUNCEMENT</a></li>
            </ul>
        </div>
    </div>
</div>

<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1> Profile Page </h1>
                <p>Look at your information here</p>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<!-- Profile -->
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="css/profilepicture.jpg" alt="student dp">
            <h3>Username</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
              <th width='30%'>First Name:</th>
                <th width="30%">Last Name:</th>
                <th width="30%">House number:	</th>
                <th width="30%">Street name:	</th> 
                <th width="30%">User ID:</th>             
                <th width="30%">Mobile Number:</th>
                <th width="30%">City:</th>
            </tr>    
<?php
    session_start();
     $username=$_SESSION['username'];
    $sql="select user.f_name, user.l_name, cust.h_no, cust.st_name, cust.cust_id, cust.phone_no ,user.city  from user, cust where cust.username='$username'and user.username=cust.username;";
    $result=mysqli_query($conn,$sql);
echo "<tr>";
while($row=mysqli_fetch_assoc($result)){
	foreach ($row as $field => $value) { 
        echo "<td>" . $value . "</td>";  
    }
	echo"</tr>";
}
echo"</table>";
$cust_id=mysqli_fetch_assoc($result)['cust_id'];
echo "<p>'.$cust_id.'</p>"
#$_SESSION["cust_id"] = $cust_id;
?>		 
          </div>
        </div>
          <div style="height: 26px"></div>
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>          
</div>
</div>
</div>
</section>
</body>
</html>