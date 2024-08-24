<?php

include "connection.php";
$r_type = $_POST['r_type'];
$r_rate = $_POST['r_rate'];
$capacity = $_POST['capacity'];
$description = $_POST['description'];

 
$image="imgg" . $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],$image);


$q="insert into rooms(r_type,r_rate,capacity,image,description) 
    values('$r_type','$r_rate','$capacity','$image','$description')";

if(mysqli_query($con,$q)){
    header("Location:admin-view-rooms.php");
}else{
    echo "fail";
}


?>

