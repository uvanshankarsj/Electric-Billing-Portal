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
	border: 10px white;
        cell: padding 10px;
        cell: spacing 0px;
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
<h1 style="margin-left: 40%;font-size:50px">Bill<h1>

<table border='2'>
        <tr>
        <th>bill_no</th>
        <th>invoice_id</th>
        <th>cust_id</th>
        <th>ppu_id</th>
        <th>unit</th>
        <th>amount</th>
        </tr>
<?php
session_start();
$name=$_SESSION["cust_id"];
print_r($name);
/*
if($name == "All"){
        $sql="select * from bill;";
}
else{
        $sql="select * from bill where cust_id='$name';";
}

$result=mysqli_query($conn,$sql);
echo "<tr>";
while($row=mysqli_fetch_assoc($result)){
	foreach ($row as $field => $value) { 
        echo "<td>" . $value . "</td>";  
    }
	echo"</tr>";
}*/
echo"</table>";
?>

</body>
</html>
