<?php
include "Connection.php";
$booking=$_GET['Book'];
$id=$_GET['Vehicle_Id'];
$query=$link->query("SELECT*FROM Booking where Booking='".$booking."' and Vehicle_Id='".$id."'");
$result=array();
while($row=$query->fetch_assoc()){
    $result[] = $row;
}
echo json_encode($result);
?>