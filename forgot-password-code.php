<?php
// Include your database connection
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // Prepare a statement to prevent SQL injection
    $stmt = $con->prepare("SELECT u_id FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Email exists in the user table, proceed with password reset process
        // You can send a reset link to the email or generate a reset token here

        header("Location:reset-password.php");
    } else {
        // Email does not exist, show an error message
        echo "This email does not exist in our records. Please try again.";
    }

    $stmt->close();
    $con->close();
}
?>
