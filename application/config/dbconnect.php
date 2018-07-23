<?php
//mysql database connection
$host = "localhost";
$user = "root";
$pass = "";
$db = "testdb"
$con = mysqli_connect($host, $user, $pass, $db) or die ("Error". mysqli_error($con));
?>