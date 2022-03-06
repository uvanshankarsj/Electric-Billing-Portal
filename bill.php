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
<h1 style="font-size:50px">Bill<h1>
<form   action="bill.php" method="get" sub>
  <label for="fname" default="none">Cust_ID:</label>
  <select name = "cust_id" id = "cust_id"  onchange = "this.form.submit()" >
  <option value="All" selected disabled hidden>Select Customer ID</option>
  <option value="C1">C1</option>
  <option value="C2">C2</option>
  <option value="C3">C3</option>
  <option value="C4">C4</option>
  <option value="C4">C5</option>
</select>
<br>
</form> 
<table>
        <tr>
        <th>bill_no</th>
        <th>invoice_id</th>
        <th>cust_id</th>
        <th>ppu_id</th>
        <th>unit</th>
        <th>amount</th>
        </tr>
<?php
if (empty($_GET)){
        $name = "All";
}
else{
        $name=$_GET['cust_id'];
}
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
}
echo"</table>";
?>
<table >
        <th>ppu_id</th>
        <th>priceperunit</th>
        <th>range</th>
        </tr>
<?php
        $sql="select * from tariff;";

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
<button type="button" onclick="alert('payment succesfull')">PAY</button>
</body>
</html>

