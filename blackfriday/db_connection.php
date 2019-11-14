<?php
$servername = "mktpcidade.mysql.dbaas.com.br";
$username = "mktpcidade";
$password = "Q#B54!Ntf7";
$db_name = "mktpcidade";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

