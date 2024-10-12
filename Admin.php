<?php



header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS'); 
if ($_SERVER["REQUEST_METHOD"]==="GET") {
    if (isset($_GET["id"])) {
        include "Admin/Get_Id.php";
    }else{
        include "Admin/Get.php";
    }
    
}elseif($_SERVER["REQUEST_METHOD"]==="POST") {
    include "Admin/Post.php";
    
}elseif($_SERVER["REQUEST_METHOD"]==="PUT") {
    include "Admin/Put.php";

}elseif($_SERVER["REQUEST_METHOD"]==="DELETE") {
    include "Admin/Delete.php";
}

?>