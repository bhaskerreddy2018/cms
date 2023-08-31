<?php
session_start();

include_once('properties/main.php');
include_once('properties/session.php');
 include_once('php/dashboard.php');

  
?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo" href="dashboard.php"><img src="logo.png" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="dashboard.php"><img src="logo.png" alt="logo" /></a>
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
                <span class="font-weight-medium mb-2"><?php echo $user_data['userName']; ?></span>
                <span class="font-weight-normal"><?php echo $user_data['package']; ?></span>
              </div>
              <!--<span class="badge badge-danger text-white ml-3 rounded">3</span>-->
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title"> Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="customers.php">
               <i class="mdi mdi-arrow-up-bold-circle-outline menu-icon"></i>
              <span class="menu-title"> Customers</span>
            </a>
          </li>
         
        
          
          <li class="nav-item">
            <a class="nav-link" href="dueCustomer.php">
              <i class="mdi mdi-account-group menu-icon"></i>
              <span class="menu-title">Due Customers</span>
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
            <a class="nav-link" href="transactions.php">
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
            <a class="nav-link" href="dueTransactions.php">
              <i class="mdi mdi-arrow-down-bold-circle-outline menu-icon"></i>
              <span class="menu-title"> Due Transactions</span>
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