<?php


include_once "connections.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $order_id = strip_tags($_POST["orderID"]);
    $order_id = mysqli_real_escape_string($connect,$order_id);

    $query = "SELECT * FROM orders WHERE order_id = '$order_id' LIMIT 1";



    $select= mysqli_query($connect, $query);
    $row = mysqli_fetch_array($select);

    $id = $row['order_id'];

    echo $order_id;

    if($order_id == $id){

        $_SESSION["order"] = $order_id;

        header("Location: track-order.php");
    } else {

        $wrong_details = " tracking number does not exist";

        echo $wrong_details;
    }

}
