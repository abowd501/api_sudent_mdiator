<?php



header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS'); 
if ($_SERVER["REQUEST_METHOD"]==="GET") {
    if (isset($_GET["id"])) {
        include "Notification/Get_Id.php";
    }else{
        include "Notification/Get.php";
    }
    
}elseif($_SERVER["REQUEST_METHOD"]==="POST") {
    include "Notification/Post.php";
    
}elseif($_SERVER["REQUEST_METHOD"]==="PUT") {
    include "Notification/Put.php";

}elseif($_SERVER["REQUEST_METHOD"]==="DELETE") {
    include "Notification/Delete.php";
}
?>