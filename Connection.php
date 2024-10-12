<?php
$hostname='localhost';
$username='root';
$pass='';
$dbname='student_mediator';

$link=new mysqli($hostname,$username,$pass,$dbname);
if($link->connect_error){
    printf( $link->connect_error);
    exit();
}

?>
