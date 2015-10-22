<?php


// These variables define the connection information for your MySQL database
$username = "root";
$password = "";
$host = "localhost";
$dbname = "ukuno_gl";

$connect = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}







