<?php

session_start();
if (!isset($_SESSION['username'])) {

    header("Location: admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1">
    <title>Dashboard - Ukinogl.com</title>

    <link rel="stylesheet" href="resources/css/main.css">
    <script data-main="resources/js/app" src="resources/js/require.js"></script>
</head>
<body>

    <header class="dashBoardHeader">
        <div class="container">
            <div class="col">
                <div class="logoContainer">
                    <a href="dashboard.php" class="logo"> <img src="resources/images/logo_alt.png" alt="Ukinogl"></a>
                </div>
            </div>

            <div class="col">
                <h1>Dashboard</h1>

                <div class="buttons">
                    <a href="view-orders.php"> View All Orders</a>
                </div>
            </div>
        </div>
    </header>

    <main role="main" class="dashBoard">
        <div class="container">
            <h1> Welcome <?php echo $_SESSION['username'];?> </h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim eos iste molestiae odio possimus quidem, tenetur voluptates? Aperiam architecto delectus hic nisi provident, quas saepe vitae? Dicta ratione repellat soluta!</p>
        </div>
        <div class="container">
            <div class="col">
                <h2>create new order</h2>

                <?php

                require_once "includes/new_orders.php";

                ?>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="createNewOrder" method="post">

                    <label for="orderName">Order Name</label>
                    <input type="text" placeholder="Order Name" id="orderName" name="orderName">

                    <label for="orderSender">Order Sender</label>
                    <input type="text" placeholder="Order Sender" id="orderSender" name="orderSender">

                    <label for="orderPickup">Order Pickup Place</label>
                    <input type="text" placeholder="Order Pickup Place" id="orderPickup" name="orderPickup">

                    <label for="orderDestination">Order Destination</label>
                    <input type="text" placeholder="Order Destination" id="orderDestination" name="orderDestination">

                    <label for="orderArrival">Order Arrival</label>
                    <input type="date" placeholder="Order Arrival" id="orderArrival" name="orderArrival">

                    <label for="orderPrice">Order Price</label>
                    <input type="text" placeholder="$9.00" id="orderPrice" name="orderPrice">

                    <label for="orderProgress">Order Progress <span>The order progess must be a number between 0 and 100*</span></label>
                    <input type="text" placeholder="10" id="orderProgress" name="orderProgress">

                    <label for="orderDetails">Order Details</label>
                    <textarea name="orderDetails" id="orderDetails" cols="30" rows="10"></textarea>


                    <?php

                    $a = mt_rand(100000, 999999);

                    $today = date("Y/n/j", time());// 10, 3, 2001
                    ?>

                    <input type="hidden" value="<?php echo $today; ?>" id="currentDate" name="orderDate">
                    <input type="hidden" value="<?php echo $a; ?>" id="orderId" name="orderID">


                    <button type="submit" class="btn btnSecondary">Create new order</button>

                    <div class="error"></div>

                    <?php

                    if ($_SERVER['REQUEST_METHOD'] == "POST") :

                        if ($connect->query($query) == TRUE) :


                            ?>
                            <div class="success">
                                <?php echo "You have created a new order successfully"; ?>

                                <a href="view-orders.php" class="btn btnPrimary">view orders</a>
                            </div>
                        <?php else: ?>
                            <div class="error">
                                <?php
                                echo "Error: " . $query . "<br>" . $connect->error;
                                ?>
                            </div>
                        <?php endif; ?>

                        <?php

                        $connect->close();
                    endif;
                    ?>


                </form>

                <script>

                    require(["app/createNewOrder"], function (createNewOrder) {

                        createNewOrder();
                    })
                </script>


            </div>

            <?php
            require_once "includes/display_orders.php";
            ?>
            <div class="col">
                <h2>update an order status</h2>

                <table class="table table-responsive table-bordered updateOrder">
                    <thead>
                    <tr>
                        <td>Order Name</td>
                        <td>Update</td>
                    </tr>
                    </thead>
                    <tbody>

                    <?php

                    while ($row = mysqli_fetch_assoc($select)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['order_name'];?>
                            </td>
                            <td>
                                <form action="update-order.php" method="get">

                                    <input type="hidden" value="<?php echo $row['order_id']; ?>" name="id">
                                    <input type="hidden" value="<?php echo $row['order_name'] ;?>" name="name">
                                    <button class="btn btnSecondary" type="submit">
                                        View or Update Order
                                    </button>
                                </form>
                            </td>
                        </tr>

                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>

    </main>

    <footer class="siteFooter">
        <div class="footerRow1">

            <div class="container">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ea, id molestias optio quibusdam similique ullam veritatis voluptatum? Cumque iusto laborum minima minus vel voluptatum. At dolores error laboriosam perferendis.</p>
            </div>

        </div>
        <div class="footerRow2">
            <div class="container">
                <ul class="footerMenu">
                    <li><a href="index.php">home</a></li>
                    <li><a href="about.html">about</a></li>
                    <li><a href="services.html">services</a></li>
                    <li><a href="contact.html">contact</a></li>
                    <li><a href="privacy-policy.html">privacy policy</a></li>
                    <li><a href="terms.html">Terms</a></li>
                </ul>
                <p class="footerContent">
                    © UkinoGL 2015
                </p>
            </div>
        </div>
    </footer>

</body>
</html>