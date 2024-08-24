<?php
session_start();
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/your/css/file.css">
    <style>
        .login_register_btn a {
            color: white;
            border: 1px solid skyblue;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            transition: all 0.3s ease;
            margin: 0 10px;
        }

        .login_register_btn a:hover {
            background-color: skyblue;
            color: white;
        }
        
        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo-img img {
            max-width: 150px;
            height: auto;
        }
    </style>
</head>
<body>
<header>
    <div class="header-area">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-5 col-lg-6">
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="rooms.php">Rooms</a></li>                                   
                                    <li><a href="facilities.php">Facilities</a></li>
                                    <li><a href="packages.php">Packages</a></li>
                                    <li><a href="register.php">Register</a></li>
                                    <li><a href="reviews.php">Reviews</a></li>
                                    
                                    <?php if (isset($_SESSION['user'])) { ?>
                                        <li><a href="logout.php">Logout</a></li>
                                    <?php } else { ?>
                                        <li><a href="login.php">Login</a></li>
                                    <?php } ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <a href="index.php">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
</body>
</html>
