<?php



include "Connection.php";
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Access-Control-Allow-Origin, Accept");
$Id=$_GET["Id"];
$query1=$link->query("SELECT*FROM booking WHERE Booking_Id='".$Id."'");

if($query1->num_rows > 0) { 
    $query=$link->query("DELETE FROM booking WHERE Booking.Booking_Id='".$Id."'");
    $ms=array("message"=>"true");
    echo json_encode($ms);
}else{
    http_response_code(204);
}

?>