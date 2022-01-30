<?php
// retrieve_from_db.php - retrieving all name and year for all the movies in the database
// should we also add genre? 

include 'connect.php'; //database connection php script
$result = mysqli_query($link,"SELECT mname,myear FROM movies");
if (mysqli_num_rows($result) == 0){
    print("No results matching your query<br>\n");
} else {
    echo "<table border='1'>"; 
    //define an html table
    //<th> Defines a header cell in a table
    //<tr> Defines a row in a table
    //<td> Defines a cell in a table
echo "<tr><th>Movie Name</th><th>Released Year</th></tr>";
while($row = mysqli_fetch_row($result)){
    echo "<tr><td>";
    echo $row[0]; // you get the Movie Name 
    echo "</td><td>"; // when I echo a text, it means I am sending it to the browser
    echo $row[1]; // you get the Year 
    echo "</td></tr>";
}
echo "</table>";
include 'disconnect.php'; }
?>