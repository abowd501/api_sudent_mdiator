<?php



header("Access-Control-Allow-Credentials: true");  
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS'); 
header('Access-Control-Max-Age: 1000');  
//header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');
function insertImage($id, $listImage){
  header('Access-Control-Allow-Origin: *');   
  include "Connection.php";
  $vehicleId=(string)$id;
  $image=$listImage;
  //echo json_encode($image);
  if(isset($image)){
    //save image in server
    foreach($image['tmp_name'] as $key=>$tmp_name){
      $imageName='\\'.uniqid().'.'.pathinfo($image['name'][$key],PATHINFO_EXTENSION);
      $imagePath='Images\Vehicle'.$imageName;
    if(move_uploaded_file($tmp_name,$imagePath)){
      $link->query("INSERT INTO `vehicle_imsge`(`Image_Id`, `Image`, `Vehicle_Id`) VALUES (' ','".$imageName."','".$vehicleId."')");
       $ms=array("message"=> "58تم العمليلة بنجاح");
        // echo json_encode($tmp_name);
    }}
  }else{
    $ms=array("message"=> "  56656");
    //echo json_encode($ms);
  }
}



?>