<?php

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS'); 
if ($_SERVER["REQUEST_METHOD"]==="GET") {
    if (isset($_GET["id"])) {
        include "Ads/Get_Id.php";
    }else{
        include "Ads/Get.php";
    }
    
}elseif($_SERVER["REQUEST_METHOD"]==="POST") {
    include "Ads/Post.php";
    
}elseif($_SERVER["REQUEST_METHOD"]==="PUT") {
    include "Ads/Put.php";

}elseif($_SERVER["REQUEST_METHOD"]==="DELETE") {
    include "Ads/Delete.php";
}
?>