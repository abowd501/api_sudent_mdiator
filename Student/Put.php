<?php


header("Access-Control-Allow-Origin: *");

//-------------------------------
 include "../Connection.php";
 
 header('Access-Control-Allow-Origin: *'); 
 $studentId=$_POST['Student_Id'];  
 $name=$_POST["Name"];
 $email=$_POST["Email"];
 $phone=$_POST['Phone'];
 $password=md5($_POST['Password']);
 $collage=$_POST['Collage'];
 $level=$_POST['Level'];
 $address=$_POST['Address'];
 $rugsNum= $_POST["Rugs_Num"];
 $image2=$_FILES['image2'];
 $imageName='\\'.uniqid().'.'.pathinfo($image2['name'],PATHINFO_EXTENSION);
 $imagePath='..\\Images\\Students'.$imageName;
 
 if(isset($_FILES['image2'])&&$_FILES['image2']['error']===UPLOAD_ERR_OK){
   if(move_uploaded_file($image2['tmp_name'],$imagePath)){
       $link->query("UPDATE `students` SET `Image` = '".$imageName."' WHERE `students`.`Student_Id`='".$studentId."';");

  
   }
 }
 //echo json_encode($collage);
 $query1=$link->query("SELECT*FROM students WHERE Phone='".$phone."'");
 $query=$link->query("SELECT*FROM students WHERE Email='".$email."'");
  // echo json_encode($query->fetch_assoc());
if($query->num_rows == 0) { 
   $link->query("UPDATE Students SET  Email='".$email."' WHERE Student_Id = '".$studentId."';");
  
 } 
 if($query1->num_rows===0) { 
       $link->query("UPDATE Students SET  Phone='".$phone."' WHERE Student_Id = '".$studentId."';");

 }
 
 $link->query("UPDATE Students SET  Address='".$address."',Level='".$level."' WHERE Student_Id = '".$studentId."';");
    $ms=array("message"=> "تم العمليلة بنجاح");
    echo json_encode($ms);

  
 
 

?>