<?php
// Include your database connection
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    // Validate passwords
    if ($newPassword !== $confirmPassword) {
        echo "<div class='error-message'>Passwords do not match.</div>";
        exit;
    }

    if (strlen($newPassword) < 6) {
        echo "<div class='error-message'>Password must be at least 6 characters long.</div>";
        exit;
    }

    // Prepare a statement to prevent SQL injection
    $stmt = $con->prepare("SELECT u_id FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Email exists, update the password
        $hashedPassword = ($newPassword);

        // Prepare statement to update password
        $stmt = $con->prepare("UPDATE user SET password = ? WHERE email = ?");
        $stmt->bind_param("ss", $hashedPassword, $email);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "<div class='success-message'>Password has been successfully updated.</div>";
            echo "<a href='login.php' class='btn-primary'>Back to login</a>";
        } else {
            echo "<div class='error-message'>Failed to update password. Please try again.</div>";
            echo "<a href='reset-password.php' class='btn-primary'>Back</a>";
        }
    } else {
        // Email does not exist
        echo "<div class='error-message'>This email does not exist in our records.</div>";
        echo "<a href='reset-password.php' class='btn-primary'>Back</a>";
    }

    $stmt->close();
    $con->close();
} else {
    // If not a POST request, show the form
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body>
    <div class="container">
        <h2>Reset Password</h2>
        <form action="reset-password.php" method="post">
            <div class="form-group">
                <label for="email">Enter your email:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="new_password">New Password:</label>
                <input type="password" class="form-control" name="new_password" id="new_password" placeholder="Enter new password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm New Password:</label>
                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm new password" required>
            </div>
            <button type="submit" class="btn-primary">Reset Password</button>
        </form>
    </div>
</body>
</html>

<?php
}
?>
