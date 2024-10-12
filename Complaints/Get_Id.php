<?php



include "Connection.php";
header("Access-Control-Allow-Origin: *");
$Id=$_GET['id'];
$query=$link->query("SELECT*FROM Complaints WHERE Student_Id='".$Id."'");
$result=array();
while($row=$query->fetch_assoc()){
    $result[] = $row;

}
echo json_encode($result);
?>