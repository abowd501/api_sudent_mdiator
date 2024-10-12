<?php



header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS'); 
if ($_SERVER["REQUEST_METHOD"]==="GET") {
    if (isset($_GET["id"])) {
        include "Feedback/Get_Id.php";
    }else{
        include "Feedback/Get.php";
    }
    
}elseif($_SERVER["REQUEST_METHOD"]==="POST") {
    include "Feedback/Post.php";
    
}elseif($_SERVER["REQUEST_METHOD"]==="PUT") {
    include "Feedback/Put.php";

}elseif($_SERVER["REQUEST_METHOD"]==="DELETE") {
    include "Feedback/Delete.php";
}
?>