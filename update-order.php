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
    <title>Dashboard</title>

    <link rel="stylesheet" href="resources/css/main.css">
    <script data-main="resources/js/app" src="resources/js/require.js"></script>
</head>
<body>

    <header class="dashBoardHeader">
        <div class="container">
            <h1>Dashboard</h1>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur dolorem eaque eius ipsam nihil odit temporibus? Debitis dicta eos ex nam, nesciunt repudiandae veritatis. Dignissimos dolores excepturi id nisi quaerat.</p>
        </div>
    </header>

    <main role="main" class="dashBoardSingle">
        <div class="container">
            <h2>Update Order</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut debitis deserunt dolore ea earum, mollitia quis rem sint suscipit veritatis. Assumenda, commodi, necessitatibus? A esse molestias nesciunt nostrum reprehenderit vel.</p>
            <?php

            require "includes/update_orders.php";
            ?>

            <form action="update-order.php" method="post" class="updateSingleOrder">

                <div class="col">
                    <label for="orderLocation">Order Location</label>
                    <input type="text" placeholder="Order Location" id="orderLocation">

                    <label for="orderProgress">Order Progress</label>
                    <input type="text" placeholder="Order Progress" id="orderProgress">

                    <div class="error">

                    </div>

                    <button type="submit" class="btn btnSecondary">Update order</button>
                </div>
                <div class="col">
                    Historia, bulla, et luna.Velox exsul semper falleres sensorem est.Germanus, primus assimilatios foris promissio de noster, magnum epos.Decors congregabo in antverpia!Est rusticus humani generis, cesaris.
                </div>

            </form>

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
                    © UkunoGL 2015
                </p>
            </div>
        </div>
    </footer>

</body>
</html>