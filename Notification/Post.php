<?php
include "Connection.php";


$note=$_POST["Node"];
$time=date(" H:i:s d/m/y");
$id=$_POST['Student_Id'];



$ss=$link->query("INSERT INTO notification(Notification_Id, Node, Notification_Time, Student_Id) VALUES ('','".$note."','".$time."','".$id."')");

if($ss=== true) {
   $ms=array("message"=> "....تم العمليلة بنجاح");
   echo json_encode($ms);
} else {
   $ms=array("message"=> "لم تتم العملية");
   echo json_encode($ms);
}

?>