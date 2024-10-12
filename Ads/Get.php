<?php
include "Connection.php";
$query=$link->query("SELECT*FROM Ads ORDER BY Ads_Id DESC");
$result=array();
while($row=$query->fetch_assoc()){
    $result[] = $row;
}
echo json_encode($result);
?>