<!doctype html>
<html class="no-js" lang="zxx">
<?php include "head.php"; ?>    
<?php include "admin-header.php"; ?>


<style>
    .table-container {
        margin-top: 20px;
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
                            <h3>ALL BOOKINGS</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container table-container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>BID</th>
                        <th>CHECKOUT DATE</th>
                        <th>CHECKIN DATE</th>
                        <th>COST</th>
                        <th>TYPE</th>
                        <th>NAME</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    if(isset($_GET['b_id'])) {
                        $qdelete = "DELETE FROM bookings WHERE b_id=" . $_GET['b_id'];
                        mysqli_query($con, $qdelete);
                    } 
                    $q = "SELECT * FROM bookings";
                    $rs = mysqli_query($con, $q);
                    while($row = mysqli_fetch_array($rs)) {
                    ?>
                    <tr>
                        <td><?php echo $row['b_id'] ?></td>
                        <td><?php echo $row['checkin_date'] ?></td>
                        <td><?php echo $row['checkout_date'] ?></td>
                        <td><?php echo $row['cost'] ?></td>
                        <td><?php echo $row['type'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td class="action-links">
                            <a href="admin-view-bookings.php?b_id=<?php echo $row['b_id']; ?>" class="btn-delete" onclick="return confirm('Do you want to delete?')">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
</html>
