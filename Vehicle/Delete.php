<?php



include "Connection.php";
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Access-Control-Allow-Origin, Accept");
$Id=$_GET["id"];
$studentId=$_GET['Student_Id'];
$query1=$link->query("SELECT Vehicle_Id FROM vehicle WHERE vehicle_Id='".$Id."'");
if($query1->num_rows>0){
    $studentId=$query1->fetch_array();
    $link->query("UPDATE Students SET  Role_Id='1' WHERE Student_Id = '".$studentId."';");
    $query=$link->query("DELETE FROM vehicle WHERE Vehicle_Id='".$Id."'");
$result=array(
    "message"=> "تم عمليلة الحذف بنجاح",
);
echo json_encode($result);
}else{
    $result=array(
        "message"=> "لم تم عمليلة الحذف ",
    );
    echo json_encode($result);
}
?>