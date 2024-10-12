<?php
include "Connection.php";

header("Access-Control-Allow-Origin: *");
$bookId=$_GET["id"];


$query1=$link->query("SELECT*FROM booking WHERE Booking_Id='".$bookId."'");

 if($query1->num_rows > 0) { 
   $query=$link->query("UPDATE booking SET  Booking='1' WHERE Booking_Id='".$bookId."';");
   http_response_code(200);
 

}else {

   http_response_code(204);
 }


?>