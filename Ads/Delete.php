<?php



include "Connection.php";
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Access-Control-Allow-Origin, Accept");
header("Access-Control-Allow-Methods:DELETE, OPTIONS");
$Id=$_GET["id"];
$query=$link->query("DELETE FROM ads WHERE Ads_Id='".$Id."'");
$result=array(
    "message"=> "تم عمليلة الحذف بنجاح",
);

echo json_encode($result);
?>