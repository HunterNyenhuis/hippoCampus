
<?php

$serverName = 'localhost';
$userName = 'alvaro';
$password = 'Aserrano1';
$dbName = "loginsystem";



$connect = mysqli_connect($serverName, $userName, $password, $dbname);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
