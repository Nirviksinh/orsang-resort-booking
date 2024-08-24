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
    <!-- header-start -->
    <?php include "header.php"; ?>
    
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
                            <input type="tel" class="form-control" name="number" id="number" placeholder="Enter your mobile number" pattern="[0-9]{10}" title="Please enter a valid 10-digit mobile number" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" minlength="6" required>
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
