<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <!-- Include necessary head content here -->
    <?php include "head.php"; ?>
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .bradcam_area {
            background-size: cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .card {
            height: 100%;
            display: flex;
            flex-direction: column;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
        .card-body {
            flex-grow: 1;
            padding: 20px;
        }
        .card-title {
            font-size: 1.25rem;
            margin-bottom: 10px;
        }
        .card-text {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            margin-bottom: 10px;
        }
        .see-more {
            cursor: pointer;
            color: #007bff;
            font-weight: bold;
            transition: color 0.3s;
        }
        .see-more:hover {
            color: #0056b3;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1rem;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .bradcam_area h3 {
            font-size: 2rem;
            margin: 0;
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php include "header.php"; ?>
    

    <div class="bradcam_area breadcam_bg_2">
        <h3>ALL ROOMS</h3>
    </div>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <?php
                    $q = "SELECT * FROM rooms";
                    $rs = mysqli_query($con, $q);
                    while ($row = mysqli_fetch_array($rs)) {
                    ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="Room image" style="height: 200px; object-fit: cover; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['r_type']; ?></h5>
                                <p class="card-text" id="description-<?php echo $row['r_id']; ?>">
                                    <strong>Monthly Rate:</strong> <?php echo $row['r_rate']; ?><br>
                                    <strong>Capacity:</strong> <?php echo $row['capacity']; ?><br>
                                    <?php echo $row['description']; ?>
                                </p>
                                <span class="see-more" data-target="description-<?php echo $row['r_id']; ?>">See More</span><br>
                                <a href="booking_room.php?r_id=<?php echo $row['r_id']; ?>" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
    <script>
        document.querySelectorAll('.see-more').forEach(function(button) {
            button.addEventListener('click', function() {
                const targetId = this.getAttribute('data-target');
                const target = document.getElementById(targetId);
                if (target.style.display === 'block') {
                    target.style.display = '-webkit-box';
                    this.textContent = 'See More';
                } else {
                    target.style.display = 'block';
                    this.textContent = 'See Less';
                }
            });
        });
    </script>
</body>
</html>
