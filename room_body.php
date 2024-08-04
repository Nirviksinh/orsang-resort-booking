<!doctype html>
<html class="no-js" lang="zxx">

<?php include "head.php"; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add rooms</title>
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
        <h3>Add rooms</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- ================ login section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4"></div>
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Add your rooms</h2>
                </div>
                <div class="col-lg-8">
                    <form action="add_rooms.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="r_id">Room id</label>
                            <input type="text" class="form-control" name="r_id" id="r_id" placeholder="Enter room id" required>
                        </div>
                        <div class="form-group">
                            <label for="r_type">Type</label>
                            <input type="text" class="form-control" name="r_type" id="r_type" placeholder="Enter room type" required>
                        </div>
                        <div class="form-group">
                            <label for="r_rate">Rate</label>
                            <input type="text" class="form-control" name="r_rate" id="r_rate" placeholder="Enter room rate" required>
                        </div>
                        <div class="form-group">
                            <label for="capacity">Capacity</label>
                            <input type="text" class="form-control" name="capacity" id="capacity" placeholder="Enter room capacity" required>
                        </div>
                        <div class="form-group">
                            <label for="image">image</label>
                            <input type="file" class="form-control" name="image" id="image" placeholder="Enter room image" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" name="description" id="description" placeholder="Enter room description" required>
                        </div>
                        <a href="#" class="btn btn-primary">Book Now</a> 
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


