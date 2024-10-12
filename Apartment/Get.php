<?php
include "Connection.php";

header("Access-Control-Allow-Origin: *");

//$query=$link->query("SELECT*FROM apartments ORDER BY Apartment_Id DESC");
$query=$link->query("SELECT apartments.*, GROUP_CONCAT(apartment_image.Id,' ',apartment_image.Image) AS Images FROM apartments LEFT JOIN apartment_image ON apartments.Apartment_Id = apartment_image.Apartment_Id GROUP BY apartments.Apartment_Id DESC");
$result=array();
while($row=$query->fetch_assoc()){
    $result[] = $row;
}
echo json_encode($result);
?>