<html>
<body>
    <?php
    //Creating connection variables
    $servername1 = "localhost";
    $username1 = "root";
    $password1 = "MAMPMAMP";
    $dbname1 = "moviesdb";

    //Create a connection variable
    $link = mysqli_connect($servername1, $username1, $password1, $dbname1);

    // Check if connection has been established
    if (!$link) {
        echo "Error: unable to connect to MySQL." . mysqli_connect_error () . PHP_EOL; 
        exit;  
    } 
    ?>
</body>
</html>

