<?php
include "Connection.php";

header("Access-Control-Allow-Origin: *");
$name=$_POST["Name"];
$roleId=$_POST['Role_Id'];
$u_email=$_POST['Email'];
$u_password=md5($_POST['Password']);
$u_phone=$_POST['Phone'];

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
$link->query("INSERT INTO admin(Admin_Id,Phone, Email,Password, Name,Role_Id) VALUES ('','".$u_phone."','".$u_email."','".$u_password."','".$name."','".$roleId."')");
        $ms=array("message"=> "تم العمليلة بنجاح");
        echo json_encode($ms);
 }


?>