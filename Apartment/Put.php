<?php
include "../Connection.php";

header("Access-Control-Allow-Origin: *");

$apartmentId=$_REQUEST["Apartment_Id"];
$location=$_POST["Location"];
$price=$_POST["Price"];
$numRoom=$_POST["Num_Room"];
$numBith=$_POST["Num_Bith"];
$floor=$_POST["Floor"];
$discription=$_POST["Discription"];


$query=$link->query("UPDATE `apartments` SET `Location`='".$location."',`Price`='".$price."',`Num_Room`='".$numRoom."',`Num_Bith`='".$numBith."',`Floor`='".$floor."',`Discription`='".$discription."' WHERE `Apartment_Id`='".$apartmentId."'");
 if($query) {         
   $ms=array("message"=> "تم العمليلة بنجاح");
   echo json_encode($ms);
  
 }else {
   
  $ms=array('message'=>'  فشلة العملية');
    echo json_encode($ms);


 }


?>