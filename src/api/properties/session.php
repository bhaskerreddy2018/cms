
<?php
session_start();
$date=date("d-m-Y");
  $userName=$_SESSION['userName'];
  $loginUrlFromDashboard="login.php";
  if($userName===NULL || !isset($_SESSION['userName'])){
      header("Location:".$loginUrlFromDashboard."?status=login to view the dashboard");
  }
  $user_id=$userName;
  
  $admin_data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `adt`"));

$scrollText=$admin_data['scrollText'];
$siteStatus=$admin_data['siteStatus'];
if($siteStatus==1){
     header("Location:".$loginUrlFromDashboard."?status=Site Is In Maintainance");
}

  ?>