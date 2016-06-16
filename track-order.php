<?php

session_start();
if (!isset($_SESSION['order'])) {

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1">
    <title>Track order - Ukinogl.com</title>

    <link rel="stylesheet" href="resources/css/main.css">
    <script data-main="resources/js/app" src="resources/js/require.js"></script>
</head>
<body>

    <header class="siteHeader">
        <div class="container">
            <div class="col">
                <div class="logoContainer">
                    <a href="/" class="logo"> <img src="resources/images/logo.jpg" alt="Ukinogl"></a>
                </div>
            </div>
            <div class="col">
                <div class="contactContainer">


                    <p class="tel">Telephone: <a href="tel:+17184134530">(718) 413-4530</a>
                <span class="socialIcons">
                    <a href="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="google-plus"><i class="fa fa-google-plus"></i></a>
                 </span>
                    </p>
                </div>
                <nav class="navigation" role="navigation">

                    <a href="#" class="mobileMenu"><i class="fa fa-bars"></i></a>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="safety-and-compliance.html">Safety & Compliance</a></li>
                        <li><a href="faqs.html">FAQS</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>

                <script>
                    require(["app/siteNavigation"], function (siteNavigation) {

                        var runMobileMenu  = siteNavigation();
                    })
                </script>
            </div>
        </div>
    </header>

    <main role="main">

        <section class="hero heroAbout">
            <div class="container">
                <div class="heroText">
                    Track Order
                </div>
            </div>
        </section>

        <div class="container">

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, architecto nostrum. Aliquid amet architecto, asperiores culpa, cupiditate dicta enim id impedit labore magnam modi numquam pariatur ratione, sapiente sed voluptatum?`</p>


            <?php
                include_once "includes/retrieve_order.php";
            ?>

            <h2><?php  echo $db_name?></h2>

            <table class="table table-responsive table-bordered table-striped">
                <thead>
                <tr>
                    <td>Order Number</td>
                    <td>Order Name</td>
                    <td>Order Sent Date</td>
                    <td>Order  Estimated Arrival Time</td>
                    <td>Order Sender From Location</td>
                    <td>Order Current Destination</td>
                    <td>Order Destination</td>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td># <?php  echo $id?></td>
                    <td><?php  echo $db_name?></td>
                    <td><?php  echo $db_date?></td>
                    <td><?php  echo $db_arrival?></td>
                    <td><?php  echo $db_destination?></td>
                    <td><?php  echo $db_location?></td>
                    <td><?php  echo $db_destination?></td>
                </tr>
                </tbody>
            </table>


            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php  echo $db_progress?>%;">
                    <span class="sr-only"><?php  echo $db_progress?>% Complete</span>
                </div>
            </div>


            <h3>Order Details</h3>

            <p> <?php  echo $db_details?></p>



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