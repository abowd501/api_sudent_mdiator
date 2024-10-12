<?php



include "../Connection.php";

header("Access-Control-Allow-Origin: *");



if($_SERVER["REQUEST_METHOD"]==="POST") {
    $id=$_POST['Vehicle_Id'];
    $image=$_FILES['image'];
    //$vehicleId=(string)$id;
    echo json_encode($image);
    if(isset($image)){
      //save image in server
      foreach($image['tmp_name'] as $key=>$tmp_name){
        $imageName='\\'.uniqid().'.'.pathinfo($image['name'][$key],PATHINFO_EXTENSION);
        $imagePath='..\\Images\Vehicle'.$imageName;
      if(move_uploaded_file($tmp_name,$imagePath)){
        $link->query("INSERT INTO `vehicle_imsge`(`Image_Id`, `Image`, `Vehicle_Id`) VALUES (' ','".$imageName."','".$id."')");
         $ms=array("message"=> "58تم العمليلة بنجاح");
          // echo json_encode($tmp_name);
      }}
    }else{
      $ms=array("message"=> "  56656");
      //echo json_encode($ms);
    }
}

elseif($_SERVER["REQUEST_METHOD"]==="GET") {
    
$Id=$_GET['id'];
$query=$link->query("SELECT*FROM vehicle_imsge WHERE vehicle_Id='".$Id."'");
$result=array();
while($row=$query->fetch_assoc()){
    $result[] = $row;

}
echo json_encode($result);
}
?>