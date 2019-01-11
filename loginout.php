<?php
session_start();
header('Access-Control-Allow-Headers:Content-Type');
header('Content-Type:application/json; charset=utf-8');
header("Access-Control-Allow-Origin:http://10.30.29.81:63341");
header("Access-Control-Allow-Credentials:true");
$_SESSION["user"]='';
$arr = array('message'=>'success');
session_destroy();
echo json_encode($arr);
?>