
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
                                <h3>ALL REVIEWS</h3>
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
                    <td> RID </td>
                    <td> BID </td>
                    <td> RATING </td>
                    <td> COMMENT </td>
                    <td> DATE </td>
                    <td> Action </td>
                  </tr>
              </thead>

              <tbody>

              <?php 
              if(isset($_GET['r_id']))
              {
                $qdelete ="delete from reviews where r_id=".$_GET['r_id'];
                mysqli_query($con,$qdelete);
              } 
              $q="select * from reviews";
              $rs = mysqli_query($con,$q);
              while($row=mysqli_fetch_array($rs)){
              ?>
                <tr>
                    <td> <?php echo $row['r_id'] ?> </td>
                    <td> <?php echo $row['b_id'] ?> </td>
                    <td> <?php echo $row['rating'] ?></td>
                    <td> <?php echo $row['comment'] ?></td>
                    <td> <?php echo $row['r_date'] ?></td>
                    <td> <a href="admin-view-reviews.php? r_id=<?php echo $row['r_id'];?>" onclick=" return confirm('do you want to delete?')">Delete</a></td>
                    
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            
            </div>
        </div>
    </div>

<?php include "footer.php"; ?>
</html>








