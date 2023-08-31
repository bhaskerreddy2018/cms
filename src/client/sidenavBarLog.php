<?php
// session_start();

// include_once('properties/main.php');
// include_once('properties/session.php');
//  include_once('php/dashboard.php');

  
?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="assets/images/faces/face1.jpg" alt="profile" />
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column pr-3">
                <span class="font-weight-medium mb-2"><?php echo $user_data['name']; ?></span>
                <span class="font-weight-normal"><?php echo $user_data['package']; ?></span>
              </div>
              <span class="badge badge-danger text-white ml-3 rounded">3</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title"> Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="deposite.php">
              <i class="mdi mdi-arrow-down-bold-circle-outline menu-icon"></i>
              <span class="menu-title"> Deposite</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="wallet.php">
              <i class="mdi mdi-wallet menu-icon"></i>
              <span class="menu-title"> Wallet</span>
            </a>                                               
          </li>
          <li class="nav-item">
            <a class="nav-link" href="directReferral.php">
              <i class="mdi mdi-account-multiple menu-icon"></i>
              <span class="menu-title"> Direct Referral</span>
            </a>
          </li>
          <!--<li class="nav-item">-->
          <!--  <a class="nav-link" href="tree.php">-->
          <!--    <i class="mdi mdi-sitemap menu-icon"></i>-->
          <!--    <span class="menu-title"> Tree</span>-->
          <!--  </a>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a class="nav-link" href="leftTeam.php">-->
          <!--    <i class="mdi mdi-account-multiple menu-icon"></i>-->
          <!--    <span class="menu-title"> Left Team</span>-->
          <!--  </a>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a class="nav-link" href="rightTeam.php">-->
          <!--    <i class="mdi mdi-account-multiple menu-icon"></i>-->
          <!--    <span class="menu-title"> Right Team</span>-->
          <!--  </a>-->
          <!--</li>-->
          <li class="nav-item">
            <a class="nav-link" href="dRT.php">
              <i class="mdi mdi-format-list-bulleted menu-icon "></i>
              <span class="menu-title"> Transactions</span>
            </a>
          </li>
          <!--<li class="nav-item">-->
          <!--  <a class="nav-link" href="fundTransfer.php">-->
          <!--    <i class="mdi mdi-arrow-expand menu-icon"></i>-->
          <!--    <span class="menu-title"> Fund Transfer</span>-->
          <!--  </a>-->
          <!--</li>-->
          <li class="nav-item">
            <a class="nav-link" href="withdrawl.php">
              <i class="mdi mdi-arrow-up-bold-circle-outline menu-icon"></i>
              <span class="menu-title"> Withdrawl</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="support.php">
              <i class="mdi mdi-message-text-outline menu-icon"></i>
              <span class="menu-title"> Support</span>
            </a>
          </li>
          <li class="nav-item">
            <span class="nav-link" href="#">
              <span class="menu-title"> Account</span>
            </span>
            <li class="nav-item">
            <a class="nav-link" href="profile.php">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title"> Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="redirect/login.php?logout=1">
              <i class="mdi mdi-power menu-icon"></i>
              <span class="menu-title"> Logout</span>
            </a>
          </li>
         
        </ul>
      </nav>