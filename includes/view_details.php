<?php


include "connections.php";

$order_id = strip_tags($_GET["id"]);

$query = "SELECT * FROM orders WHERE order_id='$order_id'";
$select= mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($select);



