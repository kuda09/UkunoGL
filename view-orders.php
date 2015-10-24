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
                    <a href="dashboard.php"> View Dashboard</a>
                </div>
            </div>
        </div>
    </header>

    <main role="main" class="dashBoard">
        <div class="container">

            <h2>view all the orders</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolorem doloremque dolores explicabo fugiat fugit in laudantium libero porro possimus, quas quia sint totam ut veritatis voluptates voluptatibus. Doloremque, quasi.</p>

            <?php
            require_once "includes/display_orders.php";
            ?>

            <table class="table table-bordered table-responsive">
                <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Order Name</th>
                    <th>Order Sender</th>
                    <th>Order Destination</th>
                    <th>Order Price</th>
                    <th>Order Status</th>
                </tr>
                </thead>

                <tbody>

                <?php

                while ($row = mysqli_fetch_assoc($select)) {


                    $status  = $row['order_progress'];

                    if ($status > 30 ){

                        $status_message = "Dispatched";
                    } elseif ( $status > 31 || $status < 99 ){

                        $status_message = "Inprogess";
                    } else {

                        $status_message = "Delieverd";
                    }
                ?>
                <tr>
                    <td>#<?php echo $row['order_id'];?></td>
                    <td><?php echo $row['order_name'];?></td>
                    <td><?php echo $row['order_sender'];?></td>
                    <td><?php echo $row['order_destination'];?></td>
                    <td><?php echo $row['order_price'];?></td>
                    <td><i class="fa fa-spinner"></i> <?php echo $status_message ;?></td>
                </tr>

                    <?php
                }
                ?>
                </tbody>
            </table>

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