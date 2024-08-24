<!doctype html>
<html class="no-js" lang="zxx">
<?php include "connection.php";?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        color: #333;
        margin: 0;
        padding: 0;
    }
    .container {
        margin-top: 50px;
    }
    h3 {
        background-color: #343a40;
        color: #fff;
        padding: 15px;
        text-align: center;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-control {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ced4da;
        background-color: #fff;
        font-size: 16px;
        color: #495057;
        transition: all 0.3s ease-in-out;
    }
    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
    }
    .btn-primary {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
    .form-group label {
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
        color: #343a40;
    }
    .form-group img {
        margin-top: 10px;
        border-radius: 5px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }
    .form-group input[type="file"] {
        padding: 3px;
    }
</style>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-8">
            <h3>Edit Room</h3>

            <?php
            if (isset($_GET['r_id'])) {
                $r_id = $_GET['r_id'];
                $q = "SELECT * FROM rooms WHERE r_id='$r_id'";
                $rs = mysqli_query($con, $q);
                $row = mysqli_fetch_array($rs);
            }

            if (isset($_POST['update'])) {
                $r_type = $_POST['r_type'];
                $r_rate = $_POST['r_rate'];
                $capacity = $_POST['capacity'];
                $description = $_POST['description'];

                if(!empty($_FILES['image']['name'])) {
                    $image = "imgg/".$_FILES['image']['name'];
                    move_uploaded_file($_FILES['image']['tmp_name'], $image);
                } else {
                    $image = $row['image'];
                }

                $qupdate = "UPDATE rooms SET r_type='$r_type', r_rate='$r_rate', capacity='$capacity', description='$description', image='$image' WHERE r_id='$r_id'";
                mysqli_query($con, $qupdate);

                echo "<script>alert('Room updated successfully!'); window.location='admin-view-rooms.php';</script>";
            }
            ?>

            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="r_type">Room Type</label>
                    <input type="text" name="r_type" class="form-control" value="<?php echo $row['r_type']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="r_rate">Room Rate</label>
                    <input type="text" name="r_rate" class="form-control" value="<?php echo $row['r_rate']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="capacity">Capacity</label>
                    <input type="text" name="capacity" class="form-control" value="<?php echo $row['capacity']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" rows="5" required><?php echo $row['description']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control">
                    <img src="<?php echo $row['image']; ?>" alt="Current Room Image" height="100" width="100">
                </div>
                <button type="submit" name="update" class="btn btn-primary">Update Room</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
