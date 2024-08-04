<?php
include "connection.php";

// Retrieve form data
$u_id = $_POST['u_id'];
$checkin_date = $_POST['checkin_date'];
$checkout_date = $_POST['checkout_date'];
$b_id = $_POST['b_id'];

// Calculate cost based on room rate and stay duration
$query = "SELECT r_rate FROM rooms WHERE r_id='$b_id'";
$result = mysqli_query($con, $query);

if ($row = mysqli_fetch_assoc($result)) {
    $monthly_book = $row['r_rate'];
    // Convert monthly rent to daily rent
    $per_day_book = $monthly_book / 30; // Assuming 30 days in a month

    // Calculate the number of days between start and end dates
    $start = new DateTime($checkin_date);
    $end = new DateTime($checkout_date);
    $interval = $start->diff($end);
    $days = $interval->days;

    // Calculate the total cost
    $total_cost = $days * $per_day_book;

    // Insert booking details into the bookings table
    $q = "INSERT INTO bookings (u_id, checkin_date, checkout_date, cost) 
          VALUES ('$u_id', '$checkin_date', '$checkout_date', '$total_cost')";

    if (mysqli_query($con, $q)) {
        echo "Booking successful!";
    } else {
        echo "Fail: " . mysqli_error($con);
    }
} else {
    echo "Room details not found.";
}
?>
