
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
                    <td> UID </td>
                    <td> Name </td>
                    <td> Email </td>
                    <td> Mobile </td>
                    <td> Action </td>
                  </tr>
              </thead>

              <tbody>

              <?php 
              if(isset($_GET['u_id']))
              {
                $qdelete ="delete from user where u_id=".$_GET['u_id'];
                mysqli_query($con,$qdelete);
              } 
              $q="select * from user";
              $rs = mysqli_query($con,$q);
              while($row=mysqli_fetch_array($rs)){
              ?>
                <tr>
                    <td> <?php echo $row['u_id'] ?> </td>
                    <td> <?php echo $row['u_name'] ?> </td>
                    <td> <?php echo $row['email'] ?></td>
                    <td> <?php echo $row['phone'] ?></td>
                    <td> <a href="admin-view-user.php? u_id=<?php echo $row['u_id'];?>" onclick=" return confirm('do you want to delete?')">Delete</a></td>
                    
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            
            </div>
        </div>
    </div>

<?php include "footer.php"; ?>
</html>








