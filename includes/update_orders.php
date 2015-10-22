<?php

require "connections.php";


if ($_SERVER['REQUEST_METHOD'] == "POST") {


    $order_id = strip_tags($_POST["orderID"]);
    $order_location = strip_tags($_POST["orderLocation"]);
    $order_progress = strip_tags($_POST["orderProgress"]);

    $order_id = mysqli_real_escape_string($connect,$order_id);
    $order_location = mysqli_real_escape_string($connect,$order_location);
    $order_progress = mysqli_real_escape_string($connect,$order_progress);

    $query = "INSERT INTO orders (
order_id,
order_progress,
order_location) VALUES (
'$order_id',
'$order_location',
'$order_progress',
)";
}
