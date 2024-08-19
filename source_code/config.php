<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "cyberlaw";

$connection = mysqli_connect($host, $username, $password, $database,3307);

if (mysqli_connect_errno() > 0) {
    die("Bağlantı hatası: " . mysqli_connect_error()); 
}

//echo "Connection successful"; 

//mysqli_close($connection);

//echo "Connection closed";
?>
