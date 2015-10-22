<?php

require "connections.php";


if ($_SERVER['REQUEST_METHOD'] == "POST") {


    $order_id = strip_tags($_POST["orderID"]);
    $order_location = strip_tags($_POST["orderLocation"]);
    $order_progress = strip_tags($_POST["orderProgress"]);

    $order_id = mysqli_real_escape_string($connect,$order_id);
    $order_location = mysqli_real_escape_string($connect,$order_location);
    $order_progress = mysqli_real_escape_string($connect,$order_progress);

    $query = "UPDATE orders set order_progress='$order_progress', order_location='$order_location' WHERE order_id='$order_id'";

    if (mysqli_query($connect, $query)) {
        echo "Record updated successfully";

    } else {
        echo "Error updating record: " . mysqli_error($connect);
    }

    mysqli_close($connect);
}


?>

<br><br><br>
<a href="dashboard.php" class="btn btnPrimary">home</a>
