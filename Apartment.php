<?php



header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS'); 
if ($_SERVER["REQUEST_METHOD"]==="GET") {
    if (isset($_GET["id"])) {
        include "Apartment/Get_Id.php";
    }else{
        include "Apartment/Get.php";
    }
    
}elseif($_SERVER["REQUEST_METHOD"]==="POST") {
    include "Apartment/Post.php";
    
}elseif($_SERVER["REQUEST_METHOD"]==="PUT") {
    include "Apartment/Put.php";

}elseif($_SERVER["REQUEST_METHOD"]==="DELETE") {
    include "Apartment/Delete.php";
}
?>