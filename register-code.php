<?php

include "connection.php";

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$number = $_POST['number'];



$q="insert into user(u_name,email,password,phone) 
    values('$username','$email','$password','$number')";

if(mysqli_query($con,$q)){
    header("Location:login.php");
}else{

    echo "fail";
}

?>