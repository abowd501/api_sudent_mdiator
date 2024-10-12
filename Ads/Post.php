<?php
include "Connection.php";

header("Access-Control-Allow-Origin: *");
$link1=$_POST["Link"];
$image=$_FILES['image'];

if(isset($image)){
$imageName='\\'.uniqid().'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
$imagePath='Images\ads'.$imageName;

if(move_uploaded_file($image["tmp_name"],$imagePath)){
   $ss=$link->query("INSERT INTO ads(Ads_Id, Ads_Image, Link) VALUES ('','".$imageName."','".$link1."')");  
    $ms=array("message"=> "....تم العمليلة بنجاح");
   echo json_encode($ms);

}} else {
   $ms=array("message"=> "لم تتم العملية");
   echo json_encode($ms);
}

?>