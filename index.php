<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1">
    <title>Full service transportation and distribution management company  - Ukino Global Logistics</title>

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
                    <p class="headline">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

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
                        <li class="current"><a href="index.php">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="carriers.html">Carriers</a></li>
                        <li><a href="faqs.html">FAQS</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>

                <script>
                    require(["app/siteNavigation"], function (siteNavigation) {

                        var runMobileMenu = siteNavigation();
                    })
                </script>
            </div>
        </div>

    </header>

    <main role="main">

        <section class="hero heroMain">
            <div class="container">
                <div class="heroText">
                    A Full service Transportation Company
                </div>
                <div class="leadCapture">
                    <h3>Track your order</h3>
                    <p>Enter your six digit tracking number to view details about your order</p>


                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="trackingForm" method="post">
                        <label for="trackNumber">
                            <input type="text" placeholder="Enter tracking number" id="trackNumber" name="orderID">
                        </label>

                        <button type="submit" class="btn btnSecondary" id="trackNumberButton">track</button>
                        <p class="error">

                            <?php
                            require_once "includes/verify_order.php";
                            ?>

                        </p>
                    </form>

                    <script>

                        require(["app/trackOrder"], function (trackOrder) {

                            trackOrder();
                        })
                    </script>

                </div>
            </div>
        </section>

        <section class="homeMain">
            <div class="container">
                <h1>Ukino Global Logistics is a full service transportation and distribution management company supporting valued clients throughout the United States and across the globe.
                </h1>
                <em>Ukino Global Logistics thrives on a strong reputation based on excellence, trustworthiness, integrity, and personal accountability.</em>
            </div>
        </section>

        <section class="homeSection">
            <div class="container">
                <div class="col">
                    <div class="wrapper">
                        <h3>Air Freight</h3>

                        <p>Ukino Global Logistics offers expedited international air freight services guaranteed to meet time-definite needs for our valuable clients across the globe.
                        </p>

                    </div>
                </div>
                <div class="col">
                    <div class="wrapper">
                        <h3>Sea Freight</h3>

                        <p>Ukino Global Logistics specializes in the seamless movement of full container load and less-than-container load to all major international ports.
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="wrapper">
                        <h3>Trucking</h3>

                        <p>Ukino Global Logistics have dedicated service vehicles designed to provide transportation and distribution management solutions to all our domestic clients allowing them the ability to reduce shipping costs as well as improving their service to their customers.
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="siteFooter">


        <div class="footerRow1">

            <div class="container">
                <p> We are solution driven, instilling a sense of urgency in everything we do, and highly committed to safety. We work hard to deliver exceptional customer service by providing tailored solutions and watching every little detail.</p>
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