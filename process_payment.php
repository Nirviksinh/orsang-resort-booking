<?php
include "connection.php";

// Retrieve form data
$b_id = $_POST['b_id'];
$u_id = $_POST['u_id'];
$checkin_date = $_POST['checkin_date'];
$checkout_date = $_POST['checkout_date'];
$payment_method = $_POST['payment_method'];
$card_number = $_POST['card_number'];
$card_expiry = $_POST['card_expiry'];
$card_cvc = $_POST['card_cvc'];

// Process payment (dummy process)
// In a real application, integrate with a payment gateway

// Store booking data
$query = "INSERT INTO booking (b_id, u_id, checkin_date, checkout_date, payment_method, card_number) VALUES ('$b_id', '$u_id', '$checkin_date', '$checkout_date', '$payment_method', '$card_number')";
if (mysqli_query($con, $query)) {
    // Redirect to confirmation page with booking ID
    $booking_id = mysqli_insert_id($con);
    header("Location: booksuccess_room.php?booking_id=$booking_id");
    exit();
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>
