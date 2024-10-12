
<?php
include "../Connection.php";
header("Access-Control-Allow-Origin: *");
$Id=$_GET['id'];
$state=$_GET['State'];
$query=$link->query("SELECT*FROM apartments WHERE Apartment_Id='".$Id."'");
if($query->num_rows>0){
    $query1=$link->query("UPDATE `apartments` SET `Stute` = b'".$state."' WHERE `apartments`.`Apartment_Id` = '".$Id."';");
       
    if($query1) {         
        $ms=array("message"=> "تم العمليلة بنجاح");
        echo json_encode($ms);
       
      }else {
        
       $ms=array('message'=>'  فشلة العملية');
         echo json_encode($ms);
     
     


 }


}

?>