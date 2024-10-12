<?php
include "Connection.php";

header("Access-Control-Allow-Origin: *");

$apartment_Id=$_POST['Apartment_Id'];
$image=$_FILES['image'];

if(isset($image)){
$imageName='\\'.uniqid().'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
$imagePath='Images\apartment'.$imageName;
echo json_encode($_POST['id']);

if(move_uploaded_file($image["tmp_name"],$imagePath)){
    $query=$link->query("INSERT INTO `apartment_image`(`Id`, `Image`, `Apartment_Id`) VALUES ('','".$imageName."','".$apartment_Id."')");
}
}
?>