<?php



include "Connection.php";
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Access-Control-Allow-Origin, Accept");
$Id=$_GET["id"];
$query=$link->query("SELECT*FROM vehicle WHERE vehicle_Id='".$Id."'");
if($query->num_rows>0){
    $result=array( "message"=> "لم تم عمليلة الحذف بنجاح");

echo json_encode($query);
}
else{
    $query=$link->query("DELETE FROM students WHERE Student_Id='".$Id."'");
    $result=array( "message"=> " تم عمليلة الحذف بنجاح");

    echo json_encode($query);
}


?>