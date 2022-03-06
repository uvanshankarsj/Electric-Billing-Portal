<?php include_once 'movies.php'; ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>announcement</title>
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
</head>
<body style="background-image:url('image.png');background-repeat: no-repeat;background-size:cover;">
	<h1 style="font-size:75px;">Announcement<h1>
<form action="enter announcement.php" method="get" >
  <label for="fname" default="none" >Street Name : </label>
  <select name="st_name" id="st_name" style = " height : 30px;" onsubmit = "this.form.submit()">
  <option value="All">Select Street Name</option>
  <option value="All">All</option>
  <option value="Edmonton"> Edmonton</option>
  <option value="EL Plazzo"> EL Plazzo</option>
  <option value="Lol_st">Lol_st</option>
  <option value="Eunumera_st">Eunumera_st</option>
  <option value="Mogami">Mogami</option>
  <option value="Othello"> Othello</option>
  <option value="remura_st">remura_st</option>
  <option value="Vallalar">Vallalar</option>
</select>
<form action="enter announcement.php" method="get" >
  <label for="admin_id" default="none" >Admin_ID : </label>
  <select name="adminid" id="adminid" style = " height : 30px;" onSubmit = "this.form.submit()">
  <option value="none">Select cust ID</option>
  <option value="A1">A1</option>
  <option value="A2">A2</option>
  <option value="A3">A3</option>
</select>
<label for="fname" default="none" >Announcement: </label>
<input type="text" id="message" name="message" style="height:40px; width: 400px">
<br>
<input type="submit" value="Submit">
<br>
</form> 
<?php
if (empty($_GET)){

}
else{
    $name = $_GET['st_name'];
	$message= $_GET['message'];
	$custid=$_GET['adminid'];
    $sql="UPDATE announcement SET message ='$message' WHERE st_name= '$name';";
	$result=mysqli_query($conn,$sql);
}
?>
</table>
</body>
</html>

