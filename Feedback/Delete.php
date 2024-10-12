<?php



include "Connection.php";
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Access-Control-Allow-Origin, Accept");
$Id=$_GET["id"];
$query=$link->query("DELETE FROM feedback WHERE Feedback_Id='".$Id."'");
$result=array(
"message"=> "تم عمليلة الحذف بنجاح",
);

echo json_encode($result);
?>