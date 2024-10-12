<?php



header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS'); 
if ($_SERVER["REQUEST_METHOD"]==="GET") {
        include "Image/Get.php";
    
    
}elseif($_SERVER["REQUEST_METHOD"]==="POST") {
    include "Image/Post.php";
    
}elseif($_SERVER["REQUEST_METHOD"]==="PUT") {
    include "Image/Put.php";

}elseif($_SERVER["REQUEST_METHOD"]==="DELETE") {
    include "Image/Delete.php";
}
?>