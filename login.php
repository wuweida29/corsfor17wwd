<?php
session_start();
header('Access-Control-Allow-Headers:Content-Type');
header('Content-Type:application/json; charset=utf-8');
header("Access-Control-Allow-Origin:http://10.30.29.81:63341");
header("Access-Control-Allow-Credentials:true");
$data=json_decode(file_get_contents("php://input"),true);
$name=$data["userName"];
$pad=$data["passWord"];
if($name == "123" && $pad == "123"){
    $_SESSION["user"] = $name;
    $arr = array('message'=>'success');
}else{
    $arr = array('message'=>'error');
}
echo json_encode($arr);
?>