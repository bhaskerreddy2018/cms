<?php
                  if(isset($_REQUEST['status'])){
                        $status=$_REQUEST['status'];
                    }
                  if($status!=""){
                        echo "<div class='alert alert-info'>".$status."</div>";
                  }
              ?>
               <form class="pt-3" action="redirect/forgotPassword.php">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Please enter your email" name="email">
                </div>
                <input type="hidden" name="forgotPassword" value="1">
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn text-light">SEND DETAILS</button>
                </div>
               
              </form>