<html>

<head>

</head>

<body>
    <h1>Movies page</h>

<?php
include 'createdb.php '; //establish database connection script
$result = mysqli_query link,"select id, name from categorytable ");
while($row = mysqli_fetch_assoc ($result)) {
$catid = $row["id"];
$catname = $row["name"];
//here we display category name in drop down list and pass catid value when posting back to ( add_book.php
print "<option value='$catid>$catname</option>";
}
include 'disconnect.php'; //close database connection script
}
?></select>


<form action="add_movie.php" method="POST">
    <input type="text" name="mid"> <br>
    <input type="text" name="mname"> <br>
    <input type="text" name="myear"> <br>
    <input type="text" name="mgenreid"> <br>
    <input type="text" name="mrating"> <br>
    <input type="submit" value="Add Movie">
</form>

