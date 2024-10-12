<?php
include "Connection.php";

header("Access-Control-Allow-Origin: *");
$booking=0;
$BookingTime=date(" H:i:s d/m/y");
$studentId=$_POST["Student_Id"];
$vehicleId=$_POST["Vehicle_Id"];

echo $studentId+$vehicleId;
$query=$link->query("SELECT*FROM booking WHERE Student_Id='".$studentId."'");
 if($query->num_rows > 0) { 
   http_response_code(204);
 } 


 else {
$link->query("INSERT INTO booking(Booking_Id, Booking, Book_Time, Student_Id, Vehicle_Id) VALUES ('','','".$BookingTime."','".$studentId."','".$vehicleId."')");
        $ms=array("message"=> true);
        echo json_encode($ms);
 }


?>