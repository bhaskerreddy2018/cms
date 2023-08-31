
<?php $apiUrl="api/securityController.php?login=1"; ?>
<div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-dark bg-light text-left p-5">
                <div class="brand-logo col-12">
                  <img style="width:80%;margin:auto;" src="logo.png">
                </div>
                <br>
                <h4 class="">Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                
               <?php
                
               
                $status=$_REQUEST['status'];
               
                if($status!=""){
                    echo "<h4 style='' class='alert alert-warning text-danger'>".$status."</h4>";
                    
                }
                
                ?>
                 <form action="<?php echo $apiUrl; ?>">
                  <div class="form-group">
                   <input type="text" name="userName" class="form-control form-control-lg" placeholder="Username">
                      </div>
                  <div class="form-group">
                      <input type="password" name="password"  class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                  </div>
                    <input type="hidden" name="login" value="1">
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                    </div>
                    <a href="#" class="auth-link text-black">Forgot password?</a>
                  </div>
                  
                  <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="signup.php" class="text-primary">Create</a>
                  </div>
                </form>
                
                
                </div>
            </div>
          </div>
                