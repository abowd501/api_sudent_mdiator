<?php

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS'); 
if ($_SERVER["REQUEST_METHOD"]==="GET") {
    if (isset($_GET["id"])) {
        include "DBStudents/Get_Id.php";
    }else{
        include "DBStudents/Get.php";
    }
    
}elseif($_SERVER["REQUEST_METHOD"]==="POST") {
    include "DBStudents/Post.php";
    
}elseif($_SERVER["REQUEST_METHOD"]==="PUT") {
    include "DBStudents/Put.php";

}elseif($_SERVER["REQUEST_METHOD"]==="DELETE") {
    include "DBStudents/Delete.php";
}
?>