<?php
include "Connection.php";


$complaint=$_POST["Complaint"];
$time=date(" H:i:s d/m/y");
$id=$_POST['Student_Id'];



$ss=$link->query("INSERT INTO complaints(`Complaint_Id`, `Complaint`, `Complaint_Time`, `Student_Id`) VALUES ('','".$complaint."','".$time."','".$id."')");

if($ss=== true) {
   $ms=array("message"=> "....تم العمليلة بنجاح");
   echo json_encode($ms);
} else {
   $ms=array("message"=> "لم تتم العملية");
   echo json_encode($ms);
}

?>