 <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light bg-white text-left p-5">
                <div class="brand-logo">
                 <img style="width:80%;margin:auto;" src="logo.png">
                </div><br>
                <h4>New here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                <form class="pt-3" action="redirect/signup.php">
                    <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="enter your name" name="name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Username" name="userName">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="email">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputreferal code1" value="<?php  $sponser=$_REQUEST['sponser']; echo $sponser; ?>" placeholder="referal code" name="refferalCode">
                  </div>
                   <?php 
                  $userName=$_REQUEST['userName'];
                  if(isset($_REQUEST['userName'])){
                     echo '  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputreferal code1" value="'.$userName.' (sponser)" placeholder="refferalUserName" name="refferalUserName" disabled>
                  </div>
                     '; 
                  }
                  ?>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputconformpassword1" placeholder="confirm password" name="confirmPassword">
                  </div>
                   <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputconformpassword1" placeholder="wallet password" name="walletPassword">
                  </div>
                 <input type="hidden" value="1" name="signup"/>
                  
                  <div class="mb-4">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
                    </div>
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="login.php" class="text-primary">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
          