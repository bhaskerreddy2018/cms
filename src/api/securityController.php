<?php
session_destroy();
ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(36000);
session_start();

include_once('properties/main.php');

$date=date("Y-m-d");


$loginUrl = Constants::login;
$dashboardUrl = Constants::dashboard;


//onclick event of login
if (isset($_REQUEST['login'])) {

  $userName=trim($_REQUEST['userName']);
  $password=trim($_REQUEST['password']);
  
  if(!$userName || !$password){
    move_to_dashboard($userName,$password);
  }
  else{
    header("Location:".$loginUrl."?status=Username or password cannot be empty");
  }
}
if (isset($_REQUEST['logout'])) {
    
    header("Location:".$loginUrl."?status=logout success");
}


function move_to_dashboard($userName,$password){
  
  global $loginUrl,$dashboardUrl;

  if(security::setUser($userName,$password)){
    header("Location:".$dashboardUrl."?status=Login success");

  }
  else{
    header("Location:".$loginUrl."?status=Username or password cannot be empty");
  }

}

?>