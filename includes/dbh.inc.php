<?php

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "password";
$dbName = "BillPayments";

$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword,$dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "<div style='font-size:10px'>Connected successfully</div>";