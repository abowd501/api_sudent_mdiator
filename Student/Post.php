<?php
include "Connection.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");  
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS'); 
header('Access-Control-Max-Age: 1000');  
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');
$name=$_POST["Name"];
$email=$_POST['Email'];
$phone=$_POST['Phone'];
$password=$_POST['Password'];
$collage=$_POST['Collage'];
$level=$_POST['Level'];
$card=$_POST['Card'];
$address=$_POST['Address'];
$rugsNum= $_Post["Rugs_Num"];
$image= $_POST["Image"];
$roleId= $_POST["Role_Id"];   
$image2=$_FILES['image2'];
$imageName='\\'.uniqid().'.'.pathinfo($image2['name'],PATHINFO_EXTENSION);
$imagePath='Images\Students'.$imageName;

$query1=$link->query("SELECT*FROM students WHERE Phone='".$phone."'");
$query=$link->query("SELECT*FROM students WHERE Email='".$email."'");
$query2=$link->query("SELECT*FROM Students WHERE Rugs_Num='".$rugsNum."'");
$query4=$link->query("SELECT*FROM verify_student WHERE Rugs_Num='".$rugsNum."'");
 if($query->num_rows > 0) { 
    $ms=array('message'=>'الايميل موجد بالفعل');
    echo json_encode($ms);
 } 
 elseif($query1->num_rows > 0) { 
    $ms=array('message'=>'رقم الهاتف موجد بالفعل');
    echo json_encode($ms);
 } elseif($query2->num_rows > 0) { 
   $ms=array('message'=>'رقم القيد موجد بالفعل');
   echo json_encode($ms);
} else {
   if(isset($_FILES['image2'])&&$_FILES['image2']['error']===UPLOAD_ERR_OK){
      //save image in server
      if(move_uploaded_file($_FILES['image2']['tmp_name'],$imagePath)){
         $ms=array("message"=> "58تم العمليلة بنجاح");
           echo json_encode($imagePath);
      }
   }
 }


?>