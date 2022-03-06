<?php

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "qwerty";
$dbName = "movies";

$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword,$dbName);
if ($mysqli->connect_error) {
    echo '<script>console.log("Welcome to GeeksforGeeks!"); </script>';
}