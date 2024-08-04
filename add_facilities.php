<?php

include "connection.php";

$f_id = $_POST['f_id'];
$f_name = $_POST['f_name'];
$description = $_POST['description'];

$image="imgg" . $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],$image);


$q="insert into facilities(f_id,f_name,image,description) 
    values('$f_id','$f_name','$image','$description')";

if(mysqli_query($con,$q)){
    header("Location:admin-view-facilities.php");
}else{
    echo "fail";
}


?>

