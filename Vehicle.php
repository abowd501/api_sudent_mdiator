<?php



header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS'); 
if ($_SERVER["REQUEST_METHOD"]==="GET") {
    if (isset($_GET["id"])) {
        include "Vehicle/Get_Id.php";
    }else{
        include "Vehicle/Get.php";
    }
    
}elseif($_SERVER["REQUEST_METHOD"]==="POST") {
    include "Vehicle/Post.php";
    
}elseif($_SERVER["REQUEST_METHOD"]==="PUT") {
    include "Vehicle/Put.php";

}elseif($_SERVER["REQUEST_METHOD"]==="DELETE") {
    include "Vehicle/Delete.php";
}
?>