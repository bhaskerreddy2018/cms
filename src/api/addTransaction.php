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

$return="recharge";

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


include_once("connection.php");
$return="recharge";
//inputs
$customerId=$_REQUEST['customerId'];
$amount=$_REQUEST['amount'];
$type=$_REQUEST['type'];


//validations
if(!$customerId){

    header("Location:../$return.php?status=enter valid customerId");

}

else if(!$amount){
   

    header("Location:../$return.php?status=enter valid amount");
}
else if(!$type){

    header("Location:../$return.php?status=enter valid type");

}



else{
$query="insert into transactions (`customerId`,`amount`,`type`,`date`) values ('$customerId','$amount','$type','$date')";

echo $query;

mysqli_query($conn,$query);

$id=$customerId;

$customerRechargeupdate="update customers set totalRecharge=totalRecharge+$amount where setupBoxNo='$id'";

$customerDueupdate="update customers set totalDue=totalDue+$amount where setupBoxNo='$id'";

mysqli_query($conn,$customerRechargeupdate);
mysqli_query($conn,$customerDueupdate);


header("Location:../$return.php?status=recharge saved");




}



?>
