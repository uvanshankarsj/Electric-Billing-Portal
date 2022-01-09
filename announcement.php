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
    font-size: 15px;
    font-family: sans-serif;
    min-width: 400px;
    
}
th{
    color : white;
    border-collapse: collapse;
    background-color : green;
      
}
td{
    color : black;
    padding-top : 3px;
    border-collapse: collapse;
    background-color : white;

}

</style>
</head>

<body style="background-image:url('image.jpg'); background-size: cover; background-repeat: no-repeat;">
<h1 style="margin-left: 40%;font-size:50px">Announcement<h1>
<form style="margin-left:40%;"  action="announcement.php" method="get" >
  <label for="fname" default="none">st_name:</label>
  <select name="st_name" id="st_name" onchange = "this.form.submit()">
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
<br>
</form> 
<table  cellpadding="0" cellspacing="0" border="0">
        <tr>
        <th >Street Name</th>
        <th >Announcement</th>
        <th>Admin ID</th>
        <th>Admin Name</th>
        </tr>
<?php
if (empty($_GET)){
    $name = 'All';
}
else{
    $name = $_GET['st_name'];
}
if($name == 'All' or $name == ''){
    $sql="select * from announcement;";
}
else{
    $sql="select * from announcement where st_name='$name';";
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
</table>
</div>
</body>
</html>

