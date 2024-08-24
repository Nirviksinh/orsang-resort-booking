<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resort_booking";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Check if user_id is set in the session
$user_id = isset($_SESSION['user']) ? (int)$_SESSION['user']['u_id'] : 0;

if ($user_id === 0) {
    // Redirect to login page if user is not logged in
    header("Location: login.php");
    exit;
}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<?php include "head.php"; ?>

<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- header-start -->
    <div class="container mt-3">
        <a href="index.php" class="btn btn-success">Back to Home</a>
    </div>


    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4"></div>
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Submit Your Review</h2>
                    
                </div>
                <div class="col-lg-8">
                    <form action="review_code.php" method="post">
                        <input type="hidden" name="r_id" value="<?php echo $row['r_id']; ?>">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name" required>
                        </div>
                        <div class="form-group">
                            <label for="r_date">Date</label>
                            <input type="date" class="form-control" name="r_date" id="r_date" placeholder="Enter Date" required>
                        </div>
                        <div class="form-group">
                            <label for="rating">Rating (1-5)</label>
                            <input type="number" class="form-control" name="rating" id="rating" min="1" max="5" placeholder="Rate (1-5)" required>
                        </div>
                        <div class="form-group">
                            <label for="comment">Your Comment</label>
                            <textarea class="form-control" name="comment" id="comment" rows="5" placeholder="Write your review here..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Review</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->

    <?php include "footer.php"; ?>

    <?php include "script.php"; ?>

    <script>
        // Set today's date as the minimum date for the date input
        document.getElementById('r_date').min = new Date().toISOString().split('T')[0];
    </script>

</body>

</html>
