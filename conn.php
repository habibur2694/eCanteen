<?php

$hostname     = "localhost";
$username     = "root";
$password     = "";
$databasename = "ecanteen";


$conn = mysqli_connect($hostname, $username, $password,$databasename);

if (!$conn) {
    die("Unable to Connect database: " . mysqli_connect_error());
}
?>
