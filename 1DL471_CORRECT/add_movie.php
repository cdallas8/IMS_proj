<?php
// add_movie.php adds a movie to the database 

include "connect.php";
/*
$mname = $_POST['mname']; 
$myear = $_POST['myear']; 
$mrating = $_POST['mrating'];
print("You entered $mname and $myear");

$result = mysqli_query($link,"INSERT INTO movies(mname,myear,mgenreid,mrating) VALUES($mname,$myear,(SELECT gid FROM genres WHERE mgenre LIKE '" 
. $_POST['mgenre'] . "'),$mrating)");
*/

$sql_insert = "INSERT INTO movies(mname,myear,mrating,mgenreid) 
    VALUES ('" . $_POST['mname'] . "', '" . $_POST['myear'] . "', 
    '" . $_POST['mrating'] . "', (SELECT gid FROM genres WHERE mgenre LIKE '" 
    . $_POST['movie_genre'] . "'))";
$result = mysqli_query($link, $sql_insert); 
// mid is autoincremented in php MyAdmin 
if($result){
    echo "Record inserted successfully";
} else {
    echo "Something went wrong while adding the movie.";
}

?>

<form action="dbindex.php" method="POST">
    <input type="submit" value="Add another movie">
</form>
