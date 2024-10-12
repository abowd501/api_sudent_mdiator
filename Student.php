<?php



header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS'); 
if ($_SERVER["REQUEST_METHOD"]==="GET") {
    if (isset($_GET["id"])) {
        include "Student/Get_Id.php";
    }else{
        include "Student/Get.php";
    }
    
}elseif($_SERVER["REQUEST_METHOD"]==="POST") {
    include "Student/Post.php";
    
}elseif($_SERVER["REQUEST_METHOD"]==="PUT") {
    include "Student/Put.php";

}elseif($_SERVER["REQUEST_METHOD"]==="DELETE") {
    include "Student/Delete.php";
}
?>