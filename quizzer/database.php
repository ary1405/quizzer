
<?php
//create connection credntials

$db_host = 'localhost';
$db_name = 'quizzer';
$db_user = 'root';
$db_pass = 'aryan2280';

//create mysqli object

$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);

if($mysqli->connect_error){
    printf("connect failed: %s",$mysqli->connect_error);
    exit();
}
 
?>