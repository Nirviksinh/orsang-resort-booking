<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <!-- Include necessary head content here -->
    <?php include "head.php"; ?>
    <style>
        .slider_area {
            margin-bottom: 30px;
        }
        .card {
            margin-bottom: 20px;
        }
        .card img {
            height: 200px;
            object-fit: cover;
        }
        .tabs {
            margin-bottom: 30px;
        }
        .tab-content .card {
            margin-bottom: 20px;
        }
        .tab-content img {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <?php include "header.php"; ?>
    <?php include "menu.php"; ?>

    <div class="container">
        <!-- Tabs Navigation -->
        <ul class="nav nav-tabs tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="rooms-tab" data-bs-toggle="tab" href="#rooms" role="tab" aria-controls="rooms" aria-selected="true">Rooms</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="facilities-tab" data-bs-toggle="tab" href="#facilities" role="tab" aria-controls="facilities" aria-selected="false">Facilities</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="packages-tab" data-bs-toggle="tab" href="#packages" role="tab" aria-controls="packages" aria-selected="false">Packages</a>
            </li>
        </ul>

        <!-- Tabs Content -->
        <div class="tab-content" id="myTabContent">
            <!-- Rooms Tab -->
            <div class="tab-pane fade show active" id="rooms" role="tabpanel" aria-labelledby="rooms-tab">
                <div class="slider_area">
                    <div class="slider_active owl-carousel">
                        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="slider_text text-center">
                                            <h3>All Rooms</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <?php
                    $con = mysqli_connect("localhost", "username", "password", "database"); // Replace with your DB details
                    $q = "SELECT * FROM rooms";
                    $rs = mysqli_query($con, $q);
                    while ($row = mysqli_fetch_array($rs)) {
                    ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="Room image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['r_type']; ?></h5>
                                <p class="card-text">
                                    <strong>Rate:</strong> <?php echo $row['r_rate']; ?><br>
                                    <strong>Capacity:</strong> <?php echo $row['capacity']; ?><br>
                                    <?php echo $row['description']; ?>
                                </p>
                                <a href="book_room_form.php?r_id=<?php echo $row['r_id']; ?>" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <!-- Facilities Tab -->
            <div class="tab-pane fade" id="facilities" role="tabpanel" aria-labelledby="facilities-tab">
                <div class="slider_area">
                    <div class="slider_active owl-carousel">
                        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="slider_text text-center">
                                            <h3>All Facilities</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <?php
                    $q = "SELECT * FROM facilities";
                    $rs = mysqli_query($con, $q);
                    while ($row = mysqli_fetch_array($rs)) {
                    ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="Facility image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['f_name']; ?></h5>
                                <p class="card-text">
                                    <strong>Rate:</strong> <?php echo $row['price']; ?><br>
                                    <?php echo $row['description']; ?>
                                </p>
                                <a href="booking.php?id=<?php echo $row['f_id']; ?>&type=facility" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <!-- Packages Tab -->
            <div class="tab-pane fade" id="packages" role="tabpanel" aria-labelledby="packages-tab">
                <div class="slider_area">
                    <div class="slider_active owl-carousel">
                        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="slider_text text-center">
                                            <h3>All Packages</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <?php
                    $q = "SELECT * FROM packages";
                    $rs = mysqli_query($con, $q);
                    while ($row = mysqli_fetch_array($rs)) {
                    ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="Package image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['p_name']; ?></h5>
                                <p class="card-text">
                                    <strong>Rate:</strong> <?php echo $row['price']; ?><br>
                                    <?php echo $row['description']; ?>
                                </p>
                                <a href="booking.php?id=<?php echo $row['p_id']; ?>&type=package" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>
    
    <!-- Include Bootstrap JS and necessary scripts for tabs -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
