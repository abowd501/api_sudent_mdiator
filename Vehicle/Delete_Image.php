<?php
include "../Connection.php";
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Access-Control-Allow-Origin, Accept");
$Id=$_GET["id"];
$query=$link->query("DELETE FROM vehicle_imsge WHERE Image_Id='".$Id."'");
$result=array(
    "message"=> "تم عمليلة الحذف بنجاح",
);

echo json_encode($query);
?>