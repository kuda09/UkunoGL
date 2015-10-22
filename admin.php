<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === "POST") {

    include_once "includes/connections.php";

    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);

    $email = stripcslashes($email);
    $password = stripcslashes($password);


    $email = mysqli_real_escape_string($connect, $email);
    $password = mysqli_real_escape_string($connect, $password);

    $password = md5($password);

    $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $query = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($query);

    $id = $row['id'];
    $db_password = $row['password'];
    $db_username = $row['username'];

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1">
    <title>login to the Admin Console</title>

    <link rel="stylesheet" href="resources/css/main.css">
    <script data-main="resources/js/app" src="resources/js/require.js"></script>
</head>
<body>

    <main role="main">

        <div class="adminLogin">

            <form action="admin.php" method="post">
                <h2>Admin Login</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque doloremque, laborum. Animi aut dolorem est ex fugit laborum, magni maxime necessitatibus non numquam officia qui quidem quod soluta vero voluptatem!</p>
                <label>
                    <input type="text" placeholder="Enter your email address" name="email">
                </label>
                <label>
                    <input type="password" placeholder="Enter your password" name="password">
                </label>

                <div class="error">

                    <?php

                    if ($_SERVER['REQUEST_METHOD'] === "POST") {

                        if ($password === $db_password) {

                            $id = session_id();

                            $_SESSION["username"] = $db_username;
                            $_SESSION["id"] = $id;

                            header("Location: dashboard.php");
                        } else {

                            $wrong_details = "You have not entered the correct details!";

                            echo $wrong_details;
                        }

                    }
                    ?>
                </div>

                <button type="submit" class="btn btnSecondary"> Login</button>
            </form>
        </div>

        <script>
            var errorMessages = {

                SERVER_DETAILS_ERROR: "<?php  if(isset($wrong_details)) {echo $wrong_details;}?>"
            }

            require(["app/admin"], function (admin) {

                //admin(errorMessages);
            })
        </script>


    </main>


</body>
</html>