<?php

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS'); 
if ($_SERVER["REQUEST_METHOD"]==="GET") {
    if (isset($_GET["id"])) {
        include "Booking/Get_Id.php";
    }else{
        include "Booking/Get.php";
    }
    
}elseif($_SERVER["REQUEST_METHOD"]==="POST") {
    include "Booking/Post.php";
    
}elseif($_SERVER["REQUEST_METHOD"]==="PUT") {
    include "Booking/Put.php";

}elseif($_SERVER["REQUEST_METHOD"]==="DELETE") {
    include "Booking/Delete.php";
}
?>