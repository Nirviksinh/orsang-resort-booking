<nav>
    <ul id="navigation">
        <li><a  href="admin-home.php">home</a></li>
        <li><a href="admin-view-user.php">users</a></li>  
        <li><a href="admin-view-bookings.php">Booking</a></li>  
        <li><a href="admin-view-facilities.php">Facilities</a></li>
        <li><a href="admin-view-rooms.php">Rooms</a></li>
        <li><a href="admin-view-packages.php">Packages</a></li>
        <li><a href="admin-view-reviews.php">Reviews</a></li>
 <?php
    if(isset($_SESSION['admin'])){
  ?>
    <li> <a href="logout.php">Logout</a></li>
  <?php } else { ?>

    <li><a href="login.php" >Login</a></li>

  <?php } ?>
    </ul>
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
