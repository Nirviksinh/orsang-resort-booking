<?php

include "connection.php";

$p_name = $_POST['p_name'];
$price = $_POST['price'];
$description = $_POST['description'];

 
$image="imgg" . $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],$image);


$q="insert into packages(p_name,price,image,description) 
    values('$p_name','$price','$image','$description')";

if(mysqli_query($con,$q)){
    header("Location:admin-view-packages.php");
}else{
    echo "fail";
}


?>

