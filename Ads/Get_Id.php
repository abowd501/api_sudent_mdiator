<?php



include "../Connection.php";
header("Access-Control-Allow-Origin: *");
$Id=1;
$query=$link->query("SELECT*FROM ads WHERE Ads_Id='".$Id."'");
$result=array();
while($row=$query->fetch_assoc()){
    $result[] = $row;

}
echo json_encode($result);
?>