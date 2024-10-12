<?php
include "../Connection.php";

header("Access-Control-Allow-Origin: *");

$adminId=$_POST['Admin_Id'];
$name=$_POST["Name"];
$u_email=$_POST['Email'];
$u_password=md5($_POST['Password']);
$u_phone=$_POST['Phone'];

$query1=$link->query("SELECT*FROM admin WHERE Phone='".$u_phone."'");
$query=$link->query("SELECT*FROM admin WHERE Email='".$u_email."'");
 if($query->num_rows===0) { 

   $link->query("UPDATE admin SET  Email='".$u_email."'  WHERE admin.Admin_Id = '".$adminId."';");
  
 } 

 if($query1->num_rows === 0) { 
   $link->query("UPDATE admin SET   Phone='".$u_phone."'  WHERE admin.Admin_Id = '".$adminId."';");
        
 }

$link->query("UPDATE admin SET   Name='".$name."' WHERE admin.Admin_Id = '".$adminId."';");
        
        if($_POST['Password']!==""){
         $link->query("UPDATE admin SET  Password='".$u_password."'  WHERE admin.Admin_Id = '".$adminId."';");

        }

$ms=array("message"=> "تم العمليلة بنجاح");
        echo json_encode($ms);

?>