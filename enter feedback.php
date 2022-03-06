<?php include_once 'includes/dbh.inc.php'; ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Feedback</title>
	<style>
		table {
			text-align : center;
		    table-layout : auto;
		    border-collapse: collapse;
		    width : 80%;	
			margin-left : auto;
		    margin-right : auto;
			margin-top : 3%;
		    font-size: 23px;
		    font-family: sans-serif;
		    min-width: 400px;
		}
		h1{
		    text-align : center;
		}
		th{
		    color : white;
		    border-collapse: collapse;
		    background-color : green;
		    padding : 4px  
		}
		td{
		    color : black;
		    border-collapse: collapse;
		    background-color : white;
		    padding : 4px
		}
		label, select {
		    display: inline-block;
		    vertical-align: middle;
		}
	</style>
</style>
</head>
<body style="background-image:url('image.png');background-size: cover;background-repeat: no-repeat;">
<h1 style="font-size:75px;">Feed back<h1>
<form   action="enter feedback.php" method="get" sub>
<label for="fname" default="none" >Cust_ID : </label>
  <select name = "cust_id" id = "cust_id"  style = " height : 30px;"onsubmit = "this.form.submit()" >
  <option value="All" selected disabled hidden>Select Customer ID</option>
  <option value="C1">C1</option>
  <option value="C2">C2</option>
  <option value="C3">C3</option>
  <option value="C4">C4</option>
</select>
<label for="fname" default="none" >feedback: </label>
<input type="text" id="message" name="message" style="height:40px; width: 400px">
<br>
<input type="submit" value="Submit">
</form> 

<?php
if (empty($_GET)){

}
else{
 $message= $_GET['message'];
 $custid=$_GET['adminid'];
 $sql="UPDATE announcement SET message ='$feedback' WHERE st_name= '$name';";
$result=mysqli_query($conn,$sql);
}
?>
</body>
</html>

