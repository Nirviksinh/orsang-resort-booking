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
      
        .custom-button {
        display: inline-block;
        padding: 12px 24px;
        background-color: #007bff;
        color: #fff;
        font-size: 1.1rem;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-radius: 50px;
        text-align: center;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .custom-button:hover {
        background-color: #0056b3;
        box-shadow: 0 6px 14px rgba(0, 0, 0, 0.3);
        transform: translateY(-2px);
        text-decoration: none;
    }
    </style>
</head>
<body>
    <?php include "header.php"; ?>
    

    <div class="bradcam_area breadcam_bg_2">
        <h3>ALL REVIEWS</h3>
    </div>
    <ul class="button">
        <li>
            <a class="nav-link custom-button" href="add_review.php">ADD REVIEWS</a>
        </li>
    </ul>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <?php
                    $q = "SELECT * FROM reviews";
                    $rs = mysqli_query($con, $q);
                    while ($row = mysqli_fetch_array($rs)) {
                    ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            
                            <div class="card-body">
                                
                                <p class="card-text" id="comment-<?php echo $row['r_id']; ?>">
                                    <strong>Name:</strong> <?php echo $row['name']; ?><br>
                                    <strong>Rating:</strong> <?php echo $row['rating']; ?><br>
                                    <strong>Date:</strong> <?php echo $row['r_date']; ?><br>
                                    <?php echo $row['comment']; ?>
                                </p>
                                <span class="see-more" data-target="comment-<?php echo $row['r_id']; ?>">See More</span><br>
                                
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
