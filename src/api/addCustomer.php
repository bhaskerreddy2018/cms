<?php



foreach (glob("models/*.php") as $filename)
{
    include $filename;
}
foreach (glob("helpers/*.php") as $filename)
{
    include $filename;
}

$return = Constants::return;

if(!security::getCurrentUser()){
    header("Location:../$return.php?status=session expired !");
}

$required_fields=['customerId','customerName','mobileNo','aadhaarNo'];

$unique_fields=['customerId','mobileNo','aadhaarNo'];

$userRepo=new repository("user","customers","customerId",$conn);


$classInstance = new customer();
foreach($_REQUEST as $key=>$input){

    if (!property_exists($classInstance, $key)) continue;
    
    $classInstance->{$key} = $value;
}

foreach($required_fields as $required_field){

    $value=$classInstance->{$required_field};
    if(!isset($value) || !$value || trim($value)==""){
        header("Location:../$return.php?status=enter valid $required_field");
    }

}


$uniqueFilter=[];
foreach($unique_fields as $unique_field){
    $uniqueFilter=array_merge($uniqueFilter,[$unique_field => $classInstance->{$unique_field}]);
}


$conn=connection::getConnection();

$existingData=$userRepo->fetchAll($uniqueFilter)['data'];

if($existingData){

    header("Location:../$return.php?status= data already exists");
}
else{

    if($userRepo->save($classInstance)['isSuccessfull']){

        header("Location:../$return.php?status=customer saved");
    }
    header("Location:../$return.php?status= failed . please try again");
    

}

// $checkDup="select * from customers Where customerId='$customerId'";
 
// $checkDupResults=mysqli_num_rows(mysqli_query($conn,$checkDup));
 
// $checkDupAadhar="select * from customers Where aadhaarNo='$aadhaarNo'";

// $checkDupAadharResults=mysqli_num_rows(mysqli_query($conn,$checkDupAadhar));


// //validations
// if(!$customerId){

   

// }

// else if(!$customerName){
   

//     header("Location:../$return.php?status=enter valid customername");
// }
// else if(!$aadhaarNo){

//     header("Location:../$return.php?status=enter valid aadhaarNo");

// }

  
//  else if($checkDupResults>0){

//   header("Location:../$return.php?status=customerId already exsists");
//   }
//   else if($checkDupAadharResults>0){
//     header("Location:../$return.php?status=enter valid aadhaarNo");
//     }
  
  
  


    
   
   

// else{

// $query="insert into customers (`customerId`,`customerName`,`aadhaarNo`,`mobileNo`,`villageName`) values ('$customerId','$customerName','$aadhaarNo','$mobileNo','$villageName')";

// echo $query;
// mysqli_query($conn,$query);

// header("Location:../$return.php?status=customer saved");

// }





?>