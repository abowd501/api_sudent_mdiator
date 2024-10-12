<?php

header("Access-Control-Allow-Origin: *");
if ($_SERVER["REQUEST_METHOD"]==="GET") {
    if (isset($_GET["id"])) {
        include("Get_Id.php");
    }else{
        include("Get.php");
    }

}elseif($_SERVER["REQUEST_METHOD"]==="POST") {

     include("Post.php");
}elseif($_SERVER["REQUEST_METHOD"]==="PUT") {
    
     include("Put.php");
}elseif($_SERVER["REQUEST_METHOD"]==="DELETE") {
    
    include("Delete.php");
}
?>