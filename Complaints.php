<?php

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS'); 
if ($_SERVER["REQUEST_METHOD"]==="GET") {
    if (isset($_GET["id"])) {
        include "Complaints/Get_Id.php";
    }else{
        include "Complaints/Get.php";
    }
    
}elseif($_SERVER["REQUEST_METHOD"]==="POST") {
    include "Complaints/Post.php";
    
}elseif($_SERVER["REQUEST_METHOD"]==="PUT") {
    include "Complaints/Put.php";

}elseif($_SERVER["REQUEST_METHOD"]==="DELETE") {
    include "Complaints/Delete.php";
}
?>