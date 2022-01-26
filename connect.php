<?php
//Creating connection variables
$servername = "localhost";
$username = "root";
$password = "MAMPMAMP";

//Create a connection variable
$link = mysqli_connect($servername, $username, $password);

// Check if connection has been established
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);    
    }
?>