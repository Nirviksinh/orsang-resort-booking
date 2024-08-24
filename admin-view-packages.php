<!doctype html>
<html class="no-js" lang="zxx">
<?php include "head.php"; ?>    
<?php include "admin-header.php"; ?>


<style>
    .button {
        list-style: none;
        margin: 20px 0;
        padding: 0;
        text-align: center;
    }
    .button li {
        display: inline-block;
    }
    .button a {
        color: #fff;
        background-color: #007bff;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        display: inline-block;
        text-align: center;
    }
    .button a:hover {
        background-color: #0056b3;
    }
    .table {
        width: 100%;
        margin: 20px 0;
        border-collapse: collapse;
    }
    .table thead tr {
        background-color: #343a40;
        color: #fff;
    }
    .table tbody tr:nth-child(odd) {
        background-color: #f8f9fa;
    }
    .table tbody tr:nth-child(even) {
        background-color: #e9ecef;
    }
    .table th, .table td {
        padding: 15px;
        text-align: center;
        border: 1px solid #dee2e6;
    }
    .table img {
        border-radius: 5px;
    }
    .action-links .btn-delete {
        color: #fff;
        background-color: #dc3545;
        border: none;
        padding: 5px 10px;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    .action-links .btn-delete:hover {
        background-color: #c82333;
        text-decoration: none;
    }
    .action-links .btn-edit {
        color: #fff;
        background-color: blue;
        border: none;
        padding: 5px 10px;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    .action-links .btn-edit:hover {
        background-color: blue;
        text-decoration: none;
    }
</style>

<div class="slider_area">
    <div class="slider_active owl-carousel">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <h3>ALL PACKAGES</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<body>
    <ul class="button">
        <li>
            <a class="nav-link" href="package_body.php">ADD PACKAGES</a>
        </li>
    </ul>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>PID</th>
                            <th>NAME</th>
                            <th>PRICE</th>
                            <th>IMAGE</th>
                            <th>DESCRIPTION</th>
                            <th>EDIT</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if(isset($_GET['p_id'])) {
                            $qdelete = "DELETE FROM packages WHERE p_id=" . $_GET['p_id'];
                            mysqli_query($con, $qdelete);
                        } 
                        $q = "SELECT * FROM packages";
                        $rs = mysqli_query($con, $q);
                        while($row = mysqli_fetch_array($rs)) {
                        ?>
                        <tr>
                            <td><?php echo $row['p_id'] ?></td>
                            <td><?php echo $row['p_name'] ?></td>
                            <td><?php echo $row['price'] ?></td>
                            <td><img src="<?php echo $row['image'] ?>" alt="Package image" height="50" width="50"></td>
                            <td><?php echo $row['description'] ?></td>
                            <td class="action-links">
                                <a href="admin-edit-packages.php?p_id=<?php echo $row['p_id']; ?>" class="btn-edit" onclick="return confirm('Do you want to edit?')">Edit</a>
                            </td>
                            <td class="action-links">
                                <a href="admin-view-packages.php?p_id=<?php echo $row['p_id']; ?>" class="btn-delete" onclick="return confirm('Do you want to delete?')">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include "footer.php"; ?>
</body>
</html>
