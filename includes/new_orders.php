<?php

require "connections.php";


if ($_SERVER['REQUEST_METHOD'] == "POST") {


    $order_id = strip_tags($_POST["orderID"]);
    $order_name = strip_tags($_POST["orderName"]);
    $order_sender = strip_tags($_POST["orderSender"]);
    $order_destination = strip_tags($_POST["orderDestination"]);
    $order_arrival = strip_tags($_POST["orderArrival"]);
    $order_price = strip_tags($_POST["orderPrice"]);
    $order_details = strip_tags($_POST["orderDetails"]);
    $order_date = strip_tags($_POST["orderDate"]);
    $order_pickup = strip_tags($_POST["orderPickup"]);
    $order_progress = strip_tags($_POST["orderProgress"]);

    $order_id = mysqli_real_escape_string($connect,$order_id);
    $order_name = mysqli_real_escape_string($connect,$order_name);
    $order_sender = mysqli_real_escape_string($connect,$order_sender);
    $order_destination = mysqli_real_escape_string($connect,$order_destination);
    $order_arrival = mysqli_real_escape_string($connect,$order_arrival);
    $order_price = mysqli_real_escape_string($connect,$order_price);
    $order_details = mysqli_real_escape_string($connect,$order_details);
    $order_date = mysqli_real_escape_string($connect,$order_date);
    $order_pickup = mysqli_real_escape_string($connect,$order_pickup);
    $order_progress = mysqli_real_escape_string($connect,$order_progress);



    $query = "INSERT INTO orders (
order_id,
order_name,
order_sender,
order_destination,
order_arrival,
order_price,
order_details,
order_date,
order_pickup,
order_progress,
order_location) VALUES (
'$order_id',
'$order_name',
'$order_sender',
'$order_destination',
'$order_arrival',
'$order_price',
'$order_details',
'$order_date',''
'$order_pickup',
'$order_progress',
'$order_pickup'
)";
}



