<?php
include "Connection.php";
header("Access-Control-Allow-Origin: *");
$query=$link->query("SELECT*FROM Complaints ORDER BY Complaint_Id DESC");
$result=array();
while($row=$query->fetch_assoc()){
    $result[] = $row;
}
echo json_encode($result);
?>