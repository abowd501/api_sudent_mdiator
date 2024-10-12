<?php

header("Access-Control-Allow-Origin: *");
include "Connection.php";
$query=$link->query("SELECT*FROM feedback  ORDER BY Feedback_Id DESC");
$result=array();
while($row=$query->fetch_assoc()){
    $result[] = $row;
}
echo json_encode($result);
?>