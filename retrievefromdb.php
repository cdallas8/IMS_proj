<?php
include 'db.php '; //database connection php script
$result = mysqli_query link,"select mname , myear from movies");
if (
mysqli_num_rows ($result) == 0 ) {
    print("No results matching your query<br>\n");
} else {
    echo "<table border='1'>"; 
    //define an html table
    //<th> Defines a header cell in a table
    //<tr> Defines a row in a table
    //<td> Defines a cell in a table
echo "<tr><th>Movie Name </th> <th>Published year</th></tr>";
while($row = mysqli_fetch_row ($result)){
    $echo "<tr><td>";
    echo $row[0];
    echo "</td><td>"; // when I echo a text, it means I am sending it to the browser
    echo $row[1];
    echo "</td></tr>";
}
echo "</table>";
include 'closeDB.php';