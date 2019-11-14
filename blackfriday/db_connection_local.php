<?php
$servername = "localhost";
$username = "root";
$password = "asus1228@";
$db_name = "mktpcidade";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>