<?php

echo "Welcome to the stage </br>";



//connecting database
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password);

echo "your connection was succesful";

?>