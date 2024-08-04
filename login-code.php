<?php

session_start();
include "connection.php";

$username = $_POST['u_name'];
$password = $_POST['password'];

$qadmin = "select * from admin where email='$username' and password='$password'";
$quser = "select * from user where email='$username' and password='$password'";


$rsAdmin = mysqli_query($con,$qadmin);
$rsUser = mysqli_query($con,$quser);

if( $rowAdmin = mysqli_fetch_array($rsAdmin)){
            $_SESSION["admin"] = $rowAdmin;
            header("Location:admin-home.php");
}else if( $rowUser = mysqli_fetch_array($rsUser)){
        $_SESSION["user"] = $rowUser;
        header("Location:user_logout.php");
}else{
    echo "fail to login";
}
?>

