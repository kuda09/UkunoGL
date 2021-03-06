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
    <title>Update Order - <?php echo $_GET['name']; ?> | Ukinogl.com</title>

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
                    <a href="view-orders.php"> View orders</a>
                </div>
            </div>
        </div>
        <div class="container">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur dolorem eaque eius ipsam nihil odit temporibus? Debitis dicta eos ex nam, nesciunt repudiandae veritatis. Dignissimos dolores excepturi id nisi quaerat.</p>

        </div>
    </header>

    <main role="main" class="dashBoardSingle">
        <div class="container">
            <h2>Update Order - <?php echo $_GET['name']; ?></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut debitis deserunt dolore ea earum, mollitia quis rem sint suscipit veritatis. Assumenda, commodi, necessitatibus? A esse molestias nesciunt nostrum reprehenderit vel.</p>

            <form action="includes/update_orders.php" method="post" class="updateSingleOrder">

                <div class="col">
                    <label for="orderLocation">Order Location</label>
                    <input type="text" placeholder="Order Location" id="orderLocation" name="orderLocation">

                    <label for="orderProgress">Order Progress</label>
                    <input type="text" placeholder="Order Progress" id="orderProgress" name="orderProgress">

                    <input type="hidden" name="orderID" value="<?php echo $_GET['id']?>">

                    <div class="error">

                    </div>

                    <button type="submit" class="btn btnSecondary">Update order<i class="fa fa-pencil-square"></i></button>

                    <hr>


                </div>
                <div class="col">
                    Historia, bulla, et luna.Velox exsul semper falleres sensorem est.Germanus, primus assimilatios foris promissio de noster, magnum epos.Decors congregabo in antverpia!Est rusticus humani generis, cesaris.
                </div>

            </form>

            <div class="clear"></div>

            <h3>To view order details click on the view order details button</h3>
            <button type="button" class="btn btnPrimary" id="viewOrderDetails"> View Order Details <i class="fa fa-info-circle"></i></button>

            <?php
                require "includes/view_details.php";
            ?>

            <dl class="orderDetails updateSingleOrder">
                <dt>Order Tracking Number</dt>
                <dd><input type="text" value="<?php echo $row['order_id']; ?>" disabled name="orderId"></dd>

                <dt>Name</dt>
                <dd><input type="text" value="<?php echo $row['order_name']; ?>" disabled name="orderName"></dd>

                <dt>Sender</dt>
                <dd><input type="text" value="<?php echo $row['order_sender']; ?>" disabled name="orderSender"></dd>

                <dt> Pickup Place</dt>
                <dd><input type="text" value="<?php echo $row['order_pickup']; ?>" disabled name="orderPickup"></dd>

                <dt>Destination</dt>
                <dd><input type="text" value="<?php echo $row['order_destination']; ?>" disabled name="orderDestination"></dd>

                <dt>Date</dt>
                <dd><input type="text" value="<?php echo $row['order_date']; ?>" disabled name="orderDate"></dd>

                <dt>Arrival</dt>
                <dd><input type="text" value="<?php echo $row['order_arrival']; ?>" disabled name="orderArrival"></dd>

                <dt>Price</dt>
                <dd><input type="text" value="<?php echo $row['order_price']; ?>" disabled name="orderPrice"></dd>

                <dt>Current Progress</dt>
                <dd><input type="text" value="<?php echo $row['order_progress']; ?>" disabled name="orderProgress"></dd>

                <dt> Details</dt>
                <dd><textarea name="orderDetails" id="orderDetails" cols="30" rows="10" disabled> <?php echo $row['order_details']; ?></textarea></dd>

            </dl>

            <script>

                require(["app/updateOrder"], function (updateOrder) {

                    updateOrder();
                })
            </script>
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