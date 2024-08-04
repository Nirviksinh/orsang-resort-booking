<!doctype html>
<html class="no-js" lang="zxx">

<?php include "head.php"; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="path-to-your-css/style.css">
</head>

<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- header-start -->
    <?php include "header.php"; ?>
    <?php include "menu.php"; ?>

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_2">
        <h3>Login</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- ================ login section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4"></div>
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Login to Your Account</h2>
                </div>
                <div class="col-lg-8">
                    <form action="login-code.php" method="post">
                        <div class="form-group">
                            <label for="u_name">Username</label>
                            <input type="text" class="form-control" name="u_name" id="u_name" placeholder="Enter your username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ login section end ================= -->

    <?php include "footer.php"; ?>
    <?php include "script.php"; ?>

</body>

</html>

<!-- <body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login-code.php" method="post">
            <label for="u_name"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="u_name" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <div class="register">
            <a href="register.php">Don't have an account? Register</a>
        </div>
    </div>
</body> -->
