<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <!-- Include necessary head content here -->
    <?php include "head.php"; ?>
</head>
<body>
    <?php include "header.php"; ?>    
    <?php include "menu.php"; ?>

    <div class="bradcam_area breadcam_bg_2">
        <h3>ALL PACKAGES</h3>
    </div>
    <br><br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
                <div class="row">
                    <?php
                    $q = "SELECT * FROM packages";
                    $rs = mysqli_query($con, $q);
                    while ($row = mysqli_fetch_array($rs)) {
                    ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="Room image" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['p_name']; ?></h5>
                                <p class="card-text">
                                    <strong>Price:</strong> <?php echo $row['price']; ?><br>
                                    <?php echo $row['description']; ?>
                                </p>
                                <!-- Uncomment the following line if you want to add a button for more details or booking -->
                                <!-- <a href="#" class="btn btn-primary">Book Now</a> -->
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>
</body>
</html>

