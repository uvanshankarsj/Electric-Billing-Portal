<?php
 	include_once 'includes/dbh.inc.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bill payment Portal</title>
	<style>
table,th,td {
	border: 1px solid black;
	text-align:center;
	width:1000px;
	left:100px;	
	margin-left: auto;
	margin-right: auto;
	margin-top:3%;
	background-color:rgb(194, 191, 191);
}
</style>
</head>
<body style="background-image:url('image.jpg');background-size: cover;background-repeat: no-repeat;">
<h1 style="margin-left: 40%;font-size:50px">Feed back<h1>
<form style="margin-left:40%;"  action="table.php" method="get" sub>
  <label for="fname" default="none">Cust_ID:</label>
  <select name = "cust_id" id = "cust_id"  onchange = "this.form.submit()" >
  <option value="All" selected disabled hidden>Select Customer ID</option>
  <option value="All">All</option>
  <option value="C1">C1</option>
  <option value="C2">C2</option>
  <option value="C3">C3</option>
  <option value="C4">C4</option>
</select>
<br>
</form> 
<table border='1'>
        <tr>
        <th>fb_id</th>
        <th>cust_id</th>
        <th>feedback</th>
        <th>admin_id</th>
        </tr>
<?php
$name=$_GET['cust_id']; 
if($name == "All"){
        $sql="select * from feedback;";
}
else{
        $sql="select * from feedback where cust_id='$name';";
}

$result=mysqli_query($conn,$sql);
echo "<tr>";
while($row=mysqli_fetch_assoc($result)){
	foreach ($row as $field => $value) { 
        echo "<td>" . $value . "</td>";  
    }
	echo"</tr>";
}
echo"</table>";
?>
</body>
</html>

