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
        // Retrieve the room ID from the URL
        $r_id = $_GET['r_id'];
        
        // Query to get room details
        $query = "SELECT * FROM rooms WHERE r_id='$r_id'";
        $result = mysqli_query($con, $query);
        
        if ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="Room image" style="height: 300px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['r_type']; ?></h5>
                        <p class="card-text">
                            <strong>Monthly Rate:</strong> <?php echo $row['r_rate']; ?><br>
                            <strong>Capacity:</strong> <?php echo $row['capacity']; ?><br>
                            <?php echo $row['description']; ?>
                        </p>
                        
                        <!-- Booking form -->
                        <form action="booked_room.php" method="post">
                            <input type="hidden" name="b_id" value="<?php echo $row['r_id']; ?>">
                            <div class="form-group">
                                <label for="checkin_date">Check-in Date:</label>
                                <input type="date" class="form-control" name="checkin_date" id="checkin_date" required>
                            </div>
                            <div class="form-group">
                                <label for="checkout_date">Check-out Date:</label>
                                <input type="date" class="form-control" name="checkout_date" id="checkout_date" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        } else {
            echo "<div class='alert alert-danger' role='alert'>Room details not found.</div>";
        }
        ?>
    </div>

    <?php include "footer.php"; ?>
</body>
</html>
