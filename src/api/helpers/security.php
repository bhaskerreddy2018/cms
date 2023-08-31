<?php
session_start();
include_once('repository.php');
include_once('connection.php');
include_once('../models/customer.php');
include "../../properties/constants.php";
class security{

   public $userId;

   public $sessionId;

   public $token;

   public $roles;

   public $userData;

   public $userIdColumn;


   public static function setUser($userId,$password,$userClass="customer",$userTable="customers",$userIdColumn="userId")
   {
      
    $conn=connection::getConnection();
    $userRepo=new repository($userClass,$userTable,$userIdColumn,$conn);
    $encryptedPassword =openssl_encrypt($password,"123",'');
    self::$userData=$userRepo->fetch(["$userIdColumn" => $userId,"password" => $encryptedPassword])['data'];

    if(self::$userData){
       self::$userIdColumn=$userIdColumn;
       $_SESSION[self::$userIdColumn]=$userId;
       self::$userId=$userId;
       self::$sessionId=session_id();
       self::$roles=explode(',',self::$userData->roles);
       return self::$userData;
    }
    return NULL;

   }


   public static function getRoles(){
       
        $userId=$_SESSION[self::$userIdColumn];
        if($userId===NULL || !isset($_SESSION[self::$userIdColumn])){
        return NULL;
        }
        return self::$roles;
   }

   public static function getCurrentUser(){
     
        $userId=$_SESSION[self::$userIdColumn];
        if($userId===NULL || !isset($_SESSION[self::$userIdColumn])){
            return NULL;
        }
        return self::$userId;
   }

   public static function getCurrentUserData(){
     
        $userId=$_SESSION[self::$userIdColumn];
        if($userId===NULL || !isset($_SESSION[self::$userIdColumn])){
        return NULL;
        }
        return self::$userData;
   }

   public static function logout(){
     
    $_SESSION[self::$userIdColumn]=NULL;
    self::$userId=NULL;
    self::$sessionId=NULL;
    self::$userData=NULL;
    self::$roles=NULL;
    session_destroy();
    return [];
   }

}