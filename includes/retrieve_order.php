<?php

include_once "connections.php";

$order_id = $_SESSION['order'];

$query = "SELECT * FROM orders WHERE order_id = '$order_id' LIMIT 1";

$select= mysqli_query($connect, $query);
$row = mysqli_fetch_array($select);

$id = $row['order_id'];
$db_progress = $row['order_progress'];
$db_name = $row['order_name'];
$db_sender = $row['order_sender'];
$db_destination  = $row['order_destination'];
$db_arrival = $row['order_arrival'];
$db_price = $row['order_price'];
$db_details = $row['order_details'];
$db_date = $row['order_date'];
$db_pickup = $row['order_pickup'];
$db_location = $row['order_location'];

