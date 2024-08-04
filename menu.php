
<nav>
    <ul id="navigation">
        <li><a href="index.php">home</a></li>
        <li><a href="rooms1.php">rooms</a></li>                                   
        <li><a href="facilities1.php">Facilities</a></li>
        <li><a href="packages1.php">packages</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="review.php">review</a></li>
        
        <?php
            if(isset($_SESSION['user'])){
        ?>
        <li> <a href="logout.php">Logout</a></li>
        <?php } else { ?>

        <li><a href="login.php" >Login</a></li>

        <?php } ?>
    </ul>
                                <!-- </ul> -->
</nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <a href="index.php">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    
                    <!-- <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</header>
</body>
</html>
