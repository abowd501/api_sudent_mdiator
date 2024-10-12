<?php
include "Connection.php";

header("Access-Control-Allow-Origin: *");

$email=$_POST['Email'];
$password= md5($_POST['Password']);

$query=$link->query("SELECT*FROM students WHERE Email='".$email."' AND Password='".$password."'");

 if($query->num_rows > 0) { 
    $id=$query->fetch_array();
    $query2=$link->query("SELECT Vehicle_Id FROM vehicle WHERE Student_Id='".$id["Student_Id"]."'");
    $ms=array('message'=>true);
    if($query2->num_rows > 0) { 
        echo json_encode($id+$query2->fetch_array()+$ms); 
    }else{
      echo json_encode($id+$ms);  
    }
    


}else {
        $ms=array("message"=>false);
        echo json_encode($ms);
 }


?>