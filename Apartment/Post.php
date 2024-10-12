<?php
include "Connection.php";

header("Access-Control-Allow-Origin: *");
//$apartmentId=$_POST["Apartment_Id"];
$location=$_POST["Location"];
$price=$_POST["Price"];
$numRoom=$_POST["Num_Room"];
$numBith=$_POST["Num_Bith"];
$floor=$_POST["Floor"];
$discription=$_POST["Discription"];
$stute=$_POST["Stute"];
$addTime=date(" H:i:s d/m/y");;



$s=$link->query("INSERT INTO apartments(Location,Price,Num_Bith,Num_Room,Floor,Discription, Stute,Add_Time) 
VALUES ('".$location."','".$price."','".$numBith."','".$numRoom."','".$floor."','".$discription."','".$stute."','".$addTime."')");
 if($s== true) {
  $query=$link->query("SELECT max(apartment_Id) as apartment_Id FROM apartments ");
        $ms=array("message"=> "....تم العملية بنجاح");
        echo json_encode($query->fetch_array()+ $ms);
 } else {
        $ms=array("message"=> "لم تتم العملية");
        echo json_encode($ms);
 }








?>