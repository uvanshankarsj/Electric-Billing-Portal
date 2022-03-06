<?php
 	include_once 'includes/dbh.inc.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bill payment Portal</title>
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
            size :300px;
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
<body style="background-image:url('image.png');background-size: cover;background-repeat: no-repeat;">
<h1 style="size=2000px">INVOICE<h1>
<form   action="invoice.php" method="get" sub>
  <label for="fname" default="none">Cust_ID:</label>
  <select name = "status" id = "status"  onchange = "this.form.submit()" >
  <option value="All" selected disabled hidden>Select Customer ID</option>
  <option value="All">All</option>
  <option value="Paid">PAID</option>
  <option value="Not Paid">Not Paid</option>
</select>
<br>
</form> 
<table >
        <tr>
        <th>invoice_id</th>
        <th>admin_id</th>
        <th>cust_id</th>
        <th>unit</th>
        <th>status</th>
        </tr>
<?php
if (empty($_GET)){
        $name = "All";
}
else{
        $name=$_GET['status'];
}
if($name == "All"){
        $sql="select * from invoice;";
}
else{
        $sql="select * from invoice where status='$name';";
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

