<?php
include "Connection.php";
$Id=$_GET["id"];
$query=$link->query("SELECT*FROM apartment_image WHERE Apartment_Id='".$Id."' ");
$result=array();
while($row=$query->fetch_assoc()){
    $result[] = $row;
}
echo json_encode($result);
?>