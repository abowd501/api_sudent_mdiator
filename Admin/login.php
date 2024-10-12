<?php
include "../Connection.php";

header("Access-Control-Allow-Origin: *");

$email=$_POST['Email'];
$password= md5($_POST['Password']);

$query=$link->query("SELECT*FROM admin WHERE Email='".$email."' AND Password='".$password."'");

 if($query->num_rows > 0) { 

       $ms=array('message'=>true);
   
      echo json_encode($query->fetch_array()+$ms); 
   
    //  echo json_encode($ms);  
 
    


}else {
        $ms=array("message"=>false);
        echo json_encode($ms);
 }


?>