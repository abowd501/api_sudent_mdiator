<?php



include "Connection.php";
header("Access-Control-Allow-Origin: *");
$Id=1;
$query=$link->query("SELECT*FROM verify_student WHERE Regst_Num='".$Id."'");
$result=array();
while($row=$query->fetch_assoc()){
    $result[] = $row;

}
echo json_encode($result);
?>