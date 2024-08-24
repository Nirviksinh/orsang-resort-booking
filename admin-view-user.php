<!doctype html>
<html class="no-js" lang="zxx">
<?php include "head.php"; ?>    
<?php include "admin-header.php"; ?>

<style>
    
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
</style>

<div class="slider_area">
    <div class="slider_active owl-carousel">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <h3>ALL USERS</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>UID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>MOBILE</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            if(isset($_GET['u_id'])) {
                                $qdelete = "DELETE FROM user WHERE u_id=" . $_GET['u_id'];
                                mysqli_query($con, $qdelete);
                            } 
                            $q = "SELECT * FROM user";
                            $rs = mysqli_query($con, $q);
                            while($row = mysqli_fetch_array($rs)) {
                            ?>
                            <tr>
                                <td><?php echo $row['u_id'] ?></td>
                                <td><?php echo $row['u_name'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['phone'] ?></td>
                                <td class="action-links">
                                    <a href="admin-view-user.php?u_id=<?php echo $row['u_id']; ?>" class="btn-delete" onclick="return confirm('Do you want to delete?')">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
</html>
