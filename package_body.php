<!doctype html>
<html class="no-js" lang="zxx">

<?php include "head.php"; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add packages</title>
    <link rel="stylesheet" href="path-to-your-css/style.css">
</head>

<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- header-start -->
    <?php include "header.php"; ?>
    <?php include "admin-menu.php"; ?>

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_2">
        <h3>Add packages</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- ================ login section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4"></div>
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Add your packages</h2>
                </div>
                <div class="col-lg-8">
                    <form action="add_packages.php" method="post"  enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="p_id">Package id</label>
                            <input type="text" class="form-control" name="p_id" id="p_id" placeholder="Enter package id" required>
                        </div>
                        <div class="form-group">
                            <label for="p_name">Name</label>
                            <input type="text" class="form-control" name="p_name" id="p_name" placeholder="Enter package name" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" name="price" id="price" placeholder="Enter package price" required>
                        </div>
                        <div class="form-group">
                            <label for="image">image</label>
                            <input type="file" class="form-control" name="image" id="image" placeholder="Enter package image" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" name="description" id="description" placeholder="Enter package description" required>
                        </div>
                        <button type="submit" class="btn btn-primary">submit</button>
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



<!-- <!DOCTYPE html>
<html lang="en">
<body>
    <div class="signup-container">
        <h2>ADD PACKAGES</h2>
        
        <form action="add.php" method="post">


            <label for="p_id">PACKAGE_ID</label>
            <input type="text" id="p_id" name="p_id" required>

            <label for="p_name">PACKAGE NAME</label>
            <input type="text" id="p_name" name="p_name" required>

            <label for="price">PRICE</label>
            <input type="text" id="price" name="price" required>

            <label for="description">DESCRIPTION</label>
            <input type="text" id="description" name="description" required>
            

            

            <button type="submit">submit</button>
        </form>
    </div>
</body>
</html>
 -->


