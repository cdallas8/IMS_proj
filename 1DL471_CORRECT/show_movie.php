
<?php
// show_movie.php - searches for movies based on movie name (mname) - returns an html table with the movie name and
// the released year. 

include "connect.php"; 

//$search=$_POST['search'];
$result = mysqli_query ($link, "SELECT m.mname,m.myear,g.mgenre,m.mrating FROM movies as m LEFT JOIN genres as g ON m.mgenreid=g.gid WHERE m.mname LIKE '%" . $_POST['search'] . "%'");
if(mysqli_num_rows($result)==0) {
    print("No results matching your query<br>\n");
} else {
    echo "<table border='1'>";
    //define an html table
    //<th> Defines a header cell in a table
    //<tr> Defines a row in a table
    //<td> Defines a cell in a table
    echo "<tr><th>Movie name</th><th>Published year</th><th>Genre</th><th>Rating</th></tr>";
    while($row = mysqli_fetch_row($result)){
        echo "<tr><td>";
        echo $row[0];
        echo "</td><td>";
        echo $row[1];
        echo "</td><td>";
        echo $row[2];
        echo "</td><td>";
        echo $row[3];
        echo "</td></tr>";
        
    }
    echo "</table>";
    include "disconnect.php";
}
?>