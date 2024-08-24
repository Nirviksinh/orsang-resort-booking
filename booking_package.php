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
<head>
    <!-- Include necessary head content here -->
    <?php include "head.php"; ?>
</head>
<body>
    <!-- Back to Home Button -->
    <div class="container mt-3">
        <a href="index.php" class="btn btn-success">Back to Home</a>
    </div>
    
    <div class="container mt-5">
        <?php
        // Retrieve the package ID from the URL
        $p_id = $_GET['p_id'];
        
        // Query to get package details
        $query = "SELECT * FROM packages WHERE p_id='$p_id'";
        $result = mysqli_query($con, $query);
        
        if ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="Package image" style="height: 300px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['p_name']; ?></h5>
                        <p class="card-text">
                            <strong>Monthly Price:</strong> <?php echo $row['price']; ?><br>
                            <?php echo $row['description']; ?>
                        </p>
                        
                        <!-- Booking form -->
                        <form action="book_package_code.php" method="post" onsubmit="return validateDates()">
                            <input type="hidden" name="b_id" value="<?php echo $row['p_id']; ?>">
                            <div class="form-group">
                                <label for="checkin_date">Check-in Date:</label>
                                <input type="date" class="form-control" name="checkin_date" id="checkin_date" required min="<?php echo date('Y-m-d'); ?>">
                            </div>
                            <div class="form-group">
                                <label for="checkout_date">Check-out Date:</label>
                                <input type="date" class="form-control" name="checkout_date" id="checkout_date" required min="<?php echo date('Y-m-d'); ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        } else {
            echo "<div class='alert alert-danger' role='alert'>Package details not found.</div>";
        }
        ?>
    </div>

    <script>
        // Function to get today's date in 'YYYY-MM-DD' format
        function getTodayDate() {
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
            var yyyy = today.getFullYear();

            return yyyy + '-' + mm + '-' + dd;
        }

        window.onload = function() {
            var today = getTodayDate();
            document.getElementById('checkin_date').setAttribute('min', today);
            document.getElementById('checkout_date').setAttribute('min', today);
        };

        document.getElementById('checkin_date').addEventListener('change', function () {
            var checkinDate = this.value;
            document.getElementById('checkout_date').setAttribute('min', checkinDate);
        });

        function validateDates() {
            var checkinDateStr = document.getElementById('checkin_date').value;
            var checkoutDateStr = document.getElementById('checkout_date').value;

            if (!checkinDateStr || !checkoutDateStr) {
                alert('Please select both check-in and check-out dates.');
                return false;
            }

            var checkinDate = new Date(checkinDateStr);
            var checkoutDate = new Date(checkoutDateStr);
            var today = new Date();
            // Set time to 00:00:00 to compare only date part
            today.setHours(0,0,0,0);
            checkinDate.setHours(0,0,0,0);
            checkoutDate.setHours(0,0,0,0);

            if (checkinDate < today) {
                alert('Check-in date cannot be in the past.');
                return false;
            }

            if (checkoutDate <= checkinDate) {
                alert('Check-out date must be after check-in date.');
                return false;
            }

            return true;
        }
    </script>

    <?php include "footer.php"; ?>
</body>
</html>
