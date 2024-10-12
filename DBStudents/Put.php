<?php
include "Connection.php";

header("Access-Control-Allow-Origin: *");
$name=$_POST["name"];
$u_name=$_POST['username'];
$u_email=$_POST['email'];
$u_password=$_POST['pass'];
$u_phone=$_POST['phone'];

$query1=$link->query("SELECT*FROM admin WHERE Phone='".$u_phone."'");
$query=$link->query("SELECT*FROM admin WHERE Email='".$u_email."'");
 if($query->num_rows > 0) { 
    $ms=array('message'=>'الايميل موجد بالفعل');
    echo json_encode($ms);
 } 

 elseif($query1->num_rows > 0) { 
    $ms=array('message'=>'رقم الهاتف موجد بالفعل');
    echo json_encode($ms);
 }else {

$link->query("UPDATE admin SET  User_Name='".$u_name."', Phone='".$u_phone."',Email='".$u_email."' ,Password='".$u_password."' ,Name='".$name."' WHERE admin.Admin_Id = 4;");
        $ms=array("message"=> "تم العمليلة بنجاح");
        echo json_encode($ms);
 }


?>