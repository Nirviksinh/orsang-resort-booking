
<!doctype html>
<html class="no-js" lang="zxx">
<?php include "head.php"; ?>    
<?php include "admin-header.php"; ?>
<?php include "admin-menu.php"; ?>

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
            <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
            
            <table class="table">
              <thead>
                  <tr>

                  
                    <td> BID </td>
                    <td> UID </td>
                    <td> check in </td>
                    <td> check out </td>
                    <td> cost </td>
                    <td> Action </td>
                  </tr>
              </thead>

              <tbody>

              <?php 
              if(isset($_GET['b_id']))
              {
                $qdelete ="delete from bookings where b_id=".$_GET['b_id'];
                mysqli_query($con,$qdelete);
              } 
              $q="select * from bookings";
              $rs = mysqli_query($con,$q);
              while($row=mysqli_fetch_array($rs)){
              ?>
                <tr>
                    <td> <?php echo $row['b_id'] ?> </td>
                    <td> <?php echo $row['u_id'] ?> </td>
                    <td> <?php echo $row['checkin_date'] ?></td>
                    <td> <?php echo $row['checkout_date'] ?></td>
                    <td> <?php echo $row['cost'] ?></td>
                    <td> <a href="admin-view-bookings.php? b_id=<?php echo $row['b_id'];?>" onclick=" return confirm('do you want to delete?')">Delete</a></td>
                    
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            
            </div>
        </div>
    </div>

<?php include "footer.php"; ?>
</html>








