<?php
include_once('main.php');


//to send mail
function sendemail($email,$subject,$message){
    global $from;
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    
    $to = $email;
    $subject = $subject;
    $message = $message;
    $headers = "MIME-Version: 1.0" . "\r\n";
       $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
       $headers .= "From:" . $from;
    if(mail($to,$subject,$message, $headers)) {
     return;
    } else {
        return;
    }
    
    }
    //mail end

?>