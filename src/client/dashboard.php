<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="shortcut icon" href="logo.png" />
  </head>
  <body>
    <div class="container-scroller">


    <!-- side nav bar -->
     <?php include_once('sidenavBar.php');
   ?>
      
      
       <div class="container-fluid page-body-wrapper">
        
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>


        <!-- top nav bar -->
       <?php include_once('topnavBar.php'); ?>
       
       <div class="main-panel">
                        <!--<marquee style="padding-top:10px;padding-bottom:10px;height:6vh;color:#000" class="bg-p"><?php echo "Hii ".$user_id; ?></marquee>-->
            
        <div class="content-wrapper pb-0">
<div class="page-header flex-wrap">
              <h3 class="mb-2 text-center"> Hi, welcome back <?php echo $user_id.""; ?> ! 
              <!--<span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">Your web analytics dashboard template.</span>-->
              </h3>
              <div class="d-flex mb-0 ml-0">
                <a href="recharge.php" class="btn btn-sm bg-white btn-icon-text border m-2 p-2">
                  <i class="mdi mdi-bank-transfer-in"></i> Recharge </a>
                <a href="transactions.php" class="btn btn-sm bg-info text-white btn-icon-text border m-2 p-2 ml-2">
                  <i class="mdi mdi-bank-transfer-out"></i> Transactions </a>
                <a href="customers.php" class="btn btn-sm m-2 p-2 ml-1 btn-success"> <i class="mdi mdi-account-group"></i> Customers </a>
              </div>
              <br>
            <!--   <div class="input-group mb-3">-->
            <!--  <div type="text" id="refId" class="form-control bg-light text-lg" placeholder="<?php echo $user_data['userName']; ?>" aria-label="Recipient's username"-->
            <!--    aria-describedby="basic-addon2" placeholder="Search for..."><?php $ref=$user_data['refferalCode']; echo $shortBizName."".$ref; ?></div>-->
            <!--    <br>-->
            <!--  <input type="hidden" id="ref" value="<?php echo 'https://bitcapital.co.in/user/signup.php?sponser='.$shortBizName.''.$ref.'&userName='.$user_id; ?>" >-->
            <!--    <button class="btn btn-primary" onclick="copyEvent(ref);" type="button">Copy</button>-->
             
            <!--</div>-->
            </div>
            <div class="row">
              <div class="col-xl-3 col-lg-12 stretch-card grid-margin">
                <div class="row">
                    
                    
                     <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-success">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">Today's Transactions</p>
                            <h2 class="text-white"><?php
                            
                            $query="select sum(amount) as total from transactions where date LIKE '%$date%'";
                            $data=mysqli_fetch_array(mysqli_query($conn,$query));
                            $todayTrx=$data['total'];
                            if($todayTrx==''){
                                $todayTrx="0";
                            }
                            
                            
                            echo "₹".$todayTrx; 
                            
                            ?><span class="h5"></span>
                            </h2>
                          </div>
                          <i class="card-icon-indicator mdi mdi-account bg-inverse-icon-success"></i>
                        </div>
                        <!--<h6 class="text-white">18.33% Since last month</h6>-->
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-warning">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">Today's Due</p>
                            <h2 class="text-white"><?php
                            
                            $query="select sum(amount) as total from transactions where date Like '%$date%' AND type='due'";
                            $data=mysqli_fetch_array(mysqli_query($conn,$query));
                            $todayTrx=$data['total'];
                            
                            if($todayTrx==''){
                                $todayTrx="0";
                            }
                            echo "₹".$todayTrx;
                            
                            ?><span class="h5"></span>
                            </h2>
                          </div>
                          <i class="card-icon-indicator mdi mdi-shield bg-inverse-icon-warning"></i>
                        </div>
                        <!--<h6 class="text-white">18.33% Since last month</h6>-->
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-danger">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">This Month Transactions</p>
                            <h2 class="text-white"><?php
                            
                            date_default_timezone_set("Asia/Calcutta");
                            $mdate=date("m-Y");
                            
                            $query="select sum(amount) as total from transactions where date LIKE '%$mdate%'";
                            $data=mysqli_fetch_array(mysqli_query($conn,$query));
                            $todayTrx=$data['total'];
                            if($todayTrx==''){
                                $todayTrx="0";
                            }
                            
                            echo "₹".$todayTrx; 
                            
                            ?><span class="h5"></span>
                            </h2>
                          </div>
                          <i class="card-icon-indicator mdi mdi-wallet-outline bg-inverse-icon-danger"></i>
                        </div>
                        <!--<h6 class="text-white">13.21% Since last month</h6>-->
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
                    <div class="card bg-primary">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">This Month Due</p>
                            <h2 class="text-white"><?php
                            
                            $query="select sum(amount) as total from transactions where date LIKE '%$mdate%' and type='due'";
                            $data=mysqli_fetch_array(mysqli_query($conn,$query));
                            $todayTrx=$data['total'];
                            if($todayTrx==''){
                                $todayTrx="0";
                            }
                            
                            echo "₹".$todayTrx; 
                            
                            ?><span class="h5"></span>
                            </h2>
                          </div>
                          <i class="card-icon-indicator mdi mdi-briefcase-outline bg-inverse-icon-primary"></i>
                        </div>
                        <!--<h6 class="text-white">67.98% Since last month</h6>-->
                      </div>
                    </div>
                  </div>
                  
                   <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-success">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">Today's Transactions Count</p>
                            <h2 class="text-white"><?php
                            
                            $query="select count(amount) as total from transactions where date LIKE '%$date%'";
                            $data=mysqli_fetch_array(mysqli_query($conn,$query));
                            $todayTrx=$data['total'];
                            
                            
                            echo $todayTrx; 
                            
                            ?><span class="h5"></span>
                            </h2>
                          </div>
                          <i class="card-icon-indicator mdi mdi-account bg-inverse-icon-success"></i>
                        </div>
                        <!--<h6 class="text-white">18.33% Since last month</h6>-->
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-warning">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">Today's Due Count</p>
                            <h2 class="text-white"><?php
                            
                            $query="select count(amount) as total from transactions where date Like '%$date%' AND type='due'";
                            $data=mysqli_fetch_array(mysqli_query($conn,$query));
                            $todayTrx=$data['total'];
                            
                            
                            echo $todayTrx;
                            
                            ?><span class="h5"></span>
                            </h2>
                          </div>
                          <i class="card-icon-indicator mdi mdi-shield bg-inverse-icon-warning"></i>
                        </div>
                        <!--<h6 class="text-white">18.33% Since last month</h6>-->
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-danger">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">This Month Transactions Count</p>
                            <h2 class="text-white"><?php
                            
                            date_default_timezone_set("Asia/Calcutta");
                            $mdate=date("m-Y");
                            
                            $query="select count(amount) as total from transactions where date LIKE '%$mdate%'";
                            $data=mysqli_fetch_array(mysqli_query($conn,$query));
                            $todayTrx=$data['total'];
                            
                            
                            echo $todayTrx; 
                            
                            ?><span class="h5"></span>
                            </h2>
                          </div>
                          <i class="card-icon-indicator mdi mdi-wallet-outline bg-inverse-icon-danger"></i>
                        </div>
                        <!--<h6 class="text-white">13.21% Since last month</h6>-->
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
                    <div class="card bg-primary">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head">This Month Due Count</p>
                            <h2 class="text-white"><?php
                            
                            $query="select count(amount) as total from transactions where date LIKE '%$mdate%' and type='due'";
                            $data=mysqli_fetch_array(mysqli_query($conn,$query));
                            $todayTrx=$data['total'];
                            
                            
                            echo $todayTrx; 
                            
                            ?><span class="h5"></span>
                            </h2>
                          </div>
                          <i class="card-icon-indicator mdi mdi-briefcase-outline bg-inverse-icon-primary"></i>
                        </div>
                        <!--<h6 class="text-white">67.98% Since last month</h6>-->
                      </div>
                    </div>
                  </div>
                  
                  
                  <!--<div class="col-xl-12 col-md-6 stretch-card pb-sm-3 pb-lg-0">-->
                  <!--  <div class="card bg-warning">-->
                  <!--    <div class="card-body px-3 py-4">-->
                  <!--      <div class="d-flex justify-content-between align-items-start">-->
                  <!--        <div class="color-card">-->
                  <!--          <p class="mb-0 color-card-head">Total Team</p>-->
                  <!--          <h2 class="text-white"><?php-->
                            
                  <!--          $query="select sum(amount) as total from transactions where date='$date'";-->
                  <!--          $data=mysqli_fetch_array(mysqli_query($conn,$query));-->
                  <!--          $todayTrx=$data['total'];-->
                            
                            
                  <!--          echo $todayTrx; -->
                            
                  <!--          ?></h2>-->
                  <!--        </div>-->
                  <!--         <i class="card-icon-indicator mdi mdi-account-multiple bg-inverse-icon-warning"></i>-->
                  <!--     </div>-->
                        <!--<h6 class="text-white">20.32% Since last month</h6>-->
                  <!--    </div>-->
                  <!--  </div>-->
                  <!--</div>-->
                </div>
              </div>
            
                </div>
              
            </div>
            </div>
            
            
        
         <!-- footer -->
       <?php include_once('footer.php'); ?>
       
       </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/vendors/flot/jquery.flot.js"></script>
    <script src="assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="assets/vendors/flot/jquery.flot.stack.js"></script>
    <script src="assets/vendors/flot/jquery.flot.pie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>