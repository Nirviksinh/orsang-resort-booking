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
    <!-- header-start -->
    <?php include "header.php"; ?>
    

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
                        <div class="register mt-3">
                            <a href="reset-password.php">Forgot Password?</a>
                        </div>
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
