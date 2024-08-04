<?php
include "connection.php";

// Retrieve booking ID from the URL
$booking_id = $_GET['booking_id'];

// Query to get booking details
$query = "SELECT * FROM booking WHERE id='$booking_id'";
$result = mysqli_query($con, $query);

if ($row = mysqli_fetch_assoc($result)) {
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <!-- Include necessary head content here -->
    <?php include "head.php"; ?>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Booking Confirmation</h3>
                        <p class="card-text">
                            <strong>Booking ID:</strong> <?php echo $row['id']; ?><br>
                            <strong>User ID:</strong> <?php echo $row['u_id']; ?><br>
                            <strong>Room ID:</strong> <?php echo $row['b_id']; ?><br>
                            <strong>Check-in Date:</strong> <?php echo $row['checkin_date']; ?><br>
                            <strong>Check-out Date:</strong> <?php echo $row['checkout_date']; ?><br>
                            <strong>Payment Method:</strong> <?php echo $row['payment_method']; ?><br>
                        </p>
                        <h4>Booking Ticket</h4>
                        <p>
                            <strong>Booking ID:</strong> <?php echo $row['id']; ?><br>
                            <strong>Room ID:</strong> <?php echo $row['b_id']; ?><br>
                            <strong>Check-in Date:</strong> <?php echo $row['checkin_date']; ?><br>
                            <strong>Check-out Date:</strong> <?php echo $row['checkout_date']; ?><br>
                        </p>
                        <p>Thank you for your booking!</p>
                        <a href="index.php" class="btn btn-success">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
} else {
    echo "<div class='alert alert-danger' role='alert'>Booking details not found.</div>";
}

mysqli_close($con);
?>
