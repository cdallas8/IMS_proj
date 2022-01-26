
<?php

include "connect.php";
$mname = $_POST["movie name"]; 
$myear = $_POST["year"]; 
print("You entered $mname and $myear")

// you can put the received data into the database here
// NULL for automation (auto increment)
$sql = "INSERT INTO movies (mid, mname, myear, mgenreid, mrating) VALUES (NULL, '$mname', '$myear') ";
$result = $mysqli->query($sql);
?>