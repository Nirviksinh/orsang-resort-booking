<?php
include "connection.php";

// Retrieve form data
$name = $_POST['name'];
$rating = $_POST['rating'];
$r_date = $_POST['r_date'];
$comment = $_POST['comment'];


    
    // Insert booking details into the bookings table
    $q = "INSERT INTO reviews ( name, rating, r_date, comment) 
          VALUES ( '$name', '$rating', '$r_date', '$comment')";

    if (mysqli_query($con, $q)) {
        header("Location:reviews.php");
    } 
    else {
        echo "Fail: " . mysqli_error($con);
    }

?>
