<?php
//Step1
$db = mysqli_connect('localhost','root','MAMPMAMP','dbmovies');
if(!$db){
    echo "Error: unable to connect to MySQL." . mysqli_connect_error() . PHP_EOL; 
    exit;  
}
?>

<html>
    <head>
    </head>
    <body>
    <h1>PHP connect to MySQL</h1>
</body>
</html>