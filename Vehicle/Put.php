<?php
include "../Connection.php";
include 'Post_Image.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Access-Control-Allow-Origin, Accept");


$type=$_POST["Type"];
$stringPoint=$_POST['String_Point'];
$distnitionPoint=$_POST['Distnition_Point'];
$arrivalTime=$_POST['Arrival_Time'];
$returnTime=$_POST['Return_Time'];
$numSeats=$_POST['Num_Seats'];
$stute=$_POST['Stute'];
$discription=$_POST['Discription'];
$studentId=$_POST['Student_Id'];
$vehicleId=$_POST['Vehicle_Id'];


 

    #$link->query("INSERT INTO admin(Admin_Id,User_Name,Phone, Email,Password, Name) VALUES ('','".$u_name."','".$u_phone."','".$u_email."','".$u_password."','".$name."')");
$res=$link->query("UPDATE `vehicle` SET `Type`='".$type."', `String_Point`='".$stringPoint."',
`Distnition_Point`='".$distnitionPoint."',`Arrival_Time`='".$arrivalTime."',`Return_Time`='".$returnTime."',`Num_Seats`='".$numSeats."',`Discription`='".$discription."' WHERE Vehicle_Id='".$vehicleId."'");
if($res){
        $ms=array("message"=> "تمت العملية بنجاح");
        echo json_encode($ms);

 }else {    
   $ms=array("message"=> "000000 ");
    echo json_encode($ms);
}


?>