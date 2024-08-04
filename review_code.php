<?php
include "connection.php";

// Retrieve form data
$b_id = $_POST['b_id'];
$name = $_POST['name'];
$rating = $_POST['rating'];
$r_date = $_POST['r_date'];
$comment = $_POST['comment'];


    
    // Insert booking details into the bookings table
    $q = "INSERT INTO reviews (b_id, name, rating, r_date, comment) 
          VALUES ('$b_id', '$name', '$rating', '$r_date', '$comment')";

    if (mysqli_query($con, $q)) {
       echo "Booking ID: " . $b_id . "<br>";
       echo "Name: " . $name . "<br>";
       echo "Date: " . $r_date . "<br>";
       echo "Rating: " . $rating . "<br>";
       echo "Comment: " . $comment . "<br>";

    } 
    else {
        echo "Fail: " . mysqli_error($con);
    }

?>
