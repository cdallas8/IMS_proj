<?php

//Establish server connection
include 'connect.php';

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);

//Create database
$sql = "CREATE DATABASE moviesdb";
if(mysqli_query($link, $sql)){
    echo "Database created successfully";
}else{
    echo "Error: Not able to execute $sql. " . mysqli_error($link);
}
}

//Close the connection
msqli_close($link) or die("Could not close the connection to the database");

?>
