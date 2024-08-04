
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
                                <h3>ALL PACKAGES</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
<body>
  <ul class ="button">
    <li class ="">
      <a class="nav-link" href="package_body.php" style="color: white; background-color: blue; padding: 5px 10px; text-decoration: none; border-radius: 5px; width: 150px; display: inline-block; text-align: center;">ADD PACKAGES</a>
</li>
</ul>
</body> 


            <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
            
            <table class="table">
              <thead>
                  <tr>
                    <td> PID </td>
                    <td> NAME </td>
                    <td> PRICE </td>
                    <td> IMAGE </td>
                    <td> DESCRIPTION </td>
                    <td> ACTION </td>
                  </tr>
              </thead>

              <tbody>

              <?php 
              if(isset($_GET['p_id']))
              {
                $qdelete ="delete from packages where p_id=".$_GET['p_id'];
                mysqli_query($con,$qdelete);
              } 
              $q="select * from packages";
              $rs = mysqli_query($con,$q);
              while($row=mysqli_fetch_array($rs)){
              ?>
                <tr>
                    <td> <?php echo $row['p_id'] ?> </td>
                    <td> <?php echo $row['p_name'] ?> </td>
                    <td> <?php echo $row['price'] ?></td>
                    <td> <img src="<?php echo $row['image'] ?>" alt="Package image" height="50" width="50"></td>
                    <td> <?php echo $row['description'] ?></td>
                    <td> <a href="admin-view-packages.php? p_id=<?php echo $row['p_id'];?>" onclick=" return confirm('do you want to delete?')">Delete</a></td>
                    
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            
            </div>
        </div>
    </div>

<?php include "footer.php"; ?>
</html>








