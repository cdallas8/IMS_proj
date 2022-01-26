<html>

<head>

</head>

<body>
    <h1>Movies page</h>


<?php
include "connect.php";
include "createdb.php"; //establish database connection script
?>

<form action="add_movie.php" method="POST">
    Please add a movie title: <br>
    <input type="text" name="mname"> <br>
    Please enter the release year:<br>
    <input type="text" name="myear"> <br>
    <select name = "category"> <br>
    <?php
    $result = mysqli_query ($link,"select gid, mgenre from genres");
    while($row = mysqli_fetch_assoc ($result)) {
    $catid = $row["gid"];
    $catname = $row["mgenre"];
    //here we display category name in drop down list and pass catid value when posting back to ( add_movie.php
    print "<option value='$catid>$catname</option>";
    }
?> </select>

    // <input type="text" name="mgenreid"> <br>

    <input type="text" name="mrating"> <br>
    <input type="submit" value="Add Movie">
</form>

<?php
include "disconnect.php"; //close database connection script
?>


</body>
</html>
