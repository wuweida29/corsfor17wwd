<?php
session_start();
header("Access-Control-Allow-Origin:http://10.30.29.81:63341");
header("Access-Control-Allow-Credentials:true");

if (isset($_SESSION['user'])){
    $userName=array("userName"=>$_SESSION['user']);
}else{
    $userName=array('isunlog'=>true);

}
echo json_encode($userName);

?>