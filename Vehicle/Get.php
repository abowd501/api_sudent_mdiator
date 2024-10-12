<?php
include "Connection.php";
header("Access-Control-Allow-Origin: *");
$query=$link->query("SELECT vehicle.*, GROUP_CONCAT(vehicle_imsge.Image_Id,' ',vehicle_imsge.Image) AS Images FROM vehicle LEFT JOIN vehicle_imsge ON vehicle.Vehicle_Id = vehicle_imsge.Vehicle_Id GROUP BY vehicle.Vehicle_Id DESC
");
$result=array();
while($row=$query->fetch_assoc()){
    $result[] = $row;
}
echo json_encode($result);
?>