<!doctype html>
<html class="no-js" lang="zxx">

<?php include "head.php"; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        <h3>Register</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- ================ register section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4"></div>
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Create Your Account</h2>
                </div>
                <div class="col-lg-8">
                    <form action="register-code.php" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="number">Mobile number</label>
                            <input type="number" class="form-control" name="number" id="number" placeholder="Enter your mobile number" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ register section end ================= -->

    <?php include "footer.php"; ?>
    <?php include "script.php"; ?>

</body>

</html>

<!-- <body>

<div class="container">
    <h2>Register</h2>
    <form action="register-code.php" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
        
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="number">mobile number</label>
        <input type="number" id="number" name="number" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        
        <input type="submit" value="Register">
    </form>
</div>

</body> -->
