<?php
require_once 'database.php';
require_once 'classes.php';

$register = new register();
$msg_error = "";

if (isset($_POST['register'])) {
    $username = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $confirmPassword = htmlspecialchars(trim($_POST['confirmPassword']));

    if ($register->registerUser($username, $email, $password, $confirmPassword)) {
        header('Location: login.php');
        exit();
    } else {
        $msg_error = $register->register_error;
    }
}
?>







<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game Vault</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>


    <!-- Header Section Begin -->
    <?php include "header.php" ?>
    <!-- Header End -->

    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb">
        <div class="video-background">
            <video autoplay muted loop playsinline>
                <source src="videos/background.mp4" type="video/mp4">
            </video>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Sign Up</h2>
                        <p>Welcome to GameVault.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Signup Section Begin -->
    <section class="signup spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Sign Up</h3>

                        <!-- Display error message -->
                        <?php if (!empty($msg_error)): ?>
                            <p style="color: red;"><?= htmlspecialchars($msg_error); ?></p>
                        <?php endif; ?>

                        <form action="signup.php" method="post">
                            <div class="input__item">
                                <input type="text" name="email" placeholder="Email address">
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input type="text" name="username" placeholder="Your Name">
                                <span class="icon_profile"></span>
                            </div>
                            <div class="input__item">
                                <input type="password"" name=" password" placeholder="Password">
                                <span class="icon_lock"></span>
                            </div>
                            <div class="input__item">
                                <input type="password" name="confirmPassword" placeholder="confirm Password">
                                <span class="icon_lock"></span>
                            </div>
                            <button type="submit" name="register" class="site-btn">Register</button>
                        </form>
                        <h5>Already have an account? <a href="login.php">Log In!</a></h5>
                    </div>


                </div>
                <div class="col-lg-6">
                    <div class="login__social__links">
                        <h3>Login With:</h3>
                        <ul>
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Sign in With Facebook</a>
                            </li>
                            <li><a href="#" class="google"><i class="fa fa-google"></i> Sign in With Google</a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> Sign in With Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Signup Section End -->

    <!-- Footer Section Begin -->
    <?php include "footer.php" ?>

    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>