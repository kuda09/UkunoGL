<?php


include_once "connections.php";

$query = "SELECT * FROM orders";

$select= mysqli_query($connect, $query);
$i = 1;


/*$id = $row['order_id'];
$db_progress = $row['order_progress'];
$db_name = $row['order_name'];
$db_sender = $row['order_sender'];
$db_destination  = $row['order_destination'];
$db_arrival = $row['order_arrival'];
$db_price = $row['order_price'];
$db_details = $row['order_details'];
$db_date = $row['order_date'];
$db_pickup = $row['order_pickup'];
$db_location = $row['order_location'];*/