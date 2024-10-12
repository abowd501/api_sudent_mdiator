<?php
include "Connection.php";

header("Access-Control-Allow-Origin: *");

$feedback=$_POST['Feedback'];
$feedback_Time=date("H:i:s d/m/y");
$student_Id=$_POST['Student_Id'];


$s=$link->query("INSERT INTO feedback(Feedback,Feedback_Time, Student_Id) VALUES ('".$feedback."','".$feedback_Time."','".$student_Id."')");
   if($s== true) {
         $ms=array("message"=> "تم العمليلة بنجاح");
         echo json_encode($ms);
  } else {
         $ms=array("message"=> "لم تتم العملية");
         echo json_encode($ms);
  }


?>