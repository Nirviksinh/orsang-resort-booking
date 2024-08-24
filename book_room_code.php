<?php
session_start();
include "connection.php";
// Check if user_id is set in the session
$user_id = isset($_SESSION['user']) ? (int)$_SESSION['user']['u_id'] : 0;
if ($user_id === 0) {
    // Redirect to login page if user is not logged in
    header("Location: login.php");
    exit;
}
// Retrieve form data
$checkin_date = $_POST['checkin_date'];
$checkout_date = $_POST['checkout_date'];
$b_id = $_POST['b_id'];
$type = "room";
// Calculate cost based on package rate and stay duration
$query = "SELECT r_rate,r_type FROM rooms WHERE r_id='$b_id'";
$result = mysqli_query($con, $query);
if ($row = mysqli_fetch_assoc($result)) {
    $room_name = $row['r_type'];
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
    $q = "INSERT INTO bookings ( checkin_date, checkout_date, cost, type, name) 
          VALUES ('$checkin_date', '$checkout_date', '$total_cost', '$type', '$room_name')";

    if (mysqli_query($con, $q)) {
        // Display booking ticket
        echo "<div class='booking-ticket' style='border: 2px solid #28a745; padding: 20px; border-radius: 10px; background-color: #f9f9f9; max-width: 600px; margin: 0 auto;'>";
        echo "<h2 style='color: #28a745; text-align: center; font-family: Arial, sans-serif;'>Booking Confirmation</h2>";
        echo "<hr style='border: 1px solid #28a745;'>";
        echo "<p style='font-size: 18px; font-family: Arial, sans-serif;'><strong>Booking Type:</strong> $type</p>";
        echo "<p style='font-size: 18px; font-family: Arial, sans-serif;'><strong>Room Name:</strong> $room_name</p>";
        echo "<p style='font-size: 18px; font-family: Arial, sans-serif;'><strong>Check-in Date:</strong> $checkin_date</p>";
        echo "<p style='font-size: 18px; font-family: Arial, sans-serif;'><strong>Check-out Date:</strong> $checkout_date</p>";
        echo "<p style='font-size: 18px; font-family: Arial, sans-serif;'><strong>Total Cost:</strong> <span style='color: blue;'>₹" . number_format($total_cost, 2) . "</span></p>";
        echo "<a href='index.php' style='display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #28a745; color: white; text-decoration: none; border-radius: 5px; text-align: center; font-family: Arial, sans-serif;'>Back to Home</a>";
        echo "</div>";

    } else {
        echo "Fail: " . mysqli_error($con);
    }
} else {
    echo "Package details not found.";
}

mysqli_close($con);
?>
