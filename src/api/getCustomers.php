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



$classInstance = new customer();

$Filter = [];

foreach($_REQUEST as $key=>$input){

    if (!property_exists($classInstance, $key)) continue;
    
    $Filter=array_merge($uniqueFilter,[$key => $input]);
    
}


$conn=connection::getConnection();


$userRepo=new repository("user","customers","customerId",$conn);

$data=$userRepo->fetchAll($uniqueFilter)['data'];


echo json_encode($data);