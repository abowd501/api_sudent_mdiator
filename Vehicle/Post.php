<?php
include "Connection.php";
include 'Post_Image.php';

header("Access-Control-Allow-Origin: *");
$type=$_POST["Type"];
$stringPoint=$_POST['String_Point'];
$distnitionPoint=$_POST['Distnition_Point'];
$arrivalTime=$_POST['Arrival_Time'];
$returnTime=$_POST['Return_Time'];
$numSeats=$_POST['Num_Seats'];
$stute="0";
$discription=$_POST['Discription'];
$studentId=$_POST['Student_Id'];
$images=$_FILES['image'];
//echo json_encode($images);

$query=$link->query("SELECT*FROM vehicle WHERE Student_Id='".$studentId."'");
 if($query->num_rows > 0) { 
   $ms=array("message"=> "انت بالفعل لديك حساب ");
    echo json_encode($ms);
    

 }else {
$res=$link->query("INSERT INTO `vehicle`(`Vehicle_Id`, `Type`, `String_Point`, `Distnition_Point`, `Arrival_Time`, `Return_Time`, `Num_Seats`, `Stute`, `Discription`, `Student_Id`) 
VALUES (' ','".$type."','".$stringPoint."','".$distnitionPoint."','".$arrivalTime."','".$returnTime."','".$numSeats."','','".$discription."','".$studentId."')");
if($res){
   $query2=$link->query("SELECT Vehicle_Id FROM vehicle WHERE Student_Id='".$studentId."'");
   $link->query("DELETE FROM booking WHERE Student_Id='".$studentId."'");
   $link->query("UPDATE Students SET  Role_Id='2' WHERE Student_Id = '".$studentId."';");
   $row=$query2->fetch_assoc();
   $id=(string)$row['Vehicle_Id'];
   insertImage($id,$images);
        $ms=array("message"=> "تمت العملية بنجاح","id"=>$id);
        echo json_encode($ms);
 }
}


?>