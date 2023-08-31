<div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Change Password
              </h3>
            </div>
             <?php
              if(isset($_REQUEST['status'])){
                    $status=$_REQUEST['status'];
                }
              if($status!=""){
                  echo "<div class='alert alert-info'>".$status."</div>";
              }
              ?>
            
              <form class="pt-3" action="redirect/cP.php">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="User Id" name="userName" value="<?php echo $userName; ?>">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Old Password" name="opassword" value="<?php echo $p; ?>">
                </div>

                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="New Password" name="npassword">
                </div>

                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Confirm Password" name="cpassword">
                </div>
                <input type="hidden" name="ch" value="1">
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn text-light">CHANGE PASSWORD</button>
                </div>
               
              </form>
            