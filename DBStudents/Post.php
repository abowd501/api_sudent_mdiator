<?php
include "Connection.php";

header("Access-Control-Allow-Origin: *");
$R=$_POST["Regst_Num"];
$N=$_POST['Student_Name'];



$query=$link->query("SELECT*FROM verify_student WHERE Regst_Num='".$R."'");
 if($query->num_rows > 0) { 
    $ms=array('message'=>'رقم الفيد موجد بالفعل');
    echo json_encode($ms);
 } else {
$link->query("INSERT INTO verify_student(DB_Id, Regst_Num, Student_Name) VALUES ('','".$R."','".$N."')");
        $ms=array("message"=> "تم العمليلة بنجاح");
        echo json_encode($ms);
 }


?>