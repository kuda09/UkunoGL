<?php


// These variables define the connection information for your MySQL database
$username = "cl42-ukinogl";
$password = "BekMR-3hr";
$host = "79.170.44.97";
$dbname = "cl42-ukinogl";

$connect = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}







