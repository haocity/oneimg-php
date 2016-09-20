<?php
require_once("main.php");
header('Content-Type: text/json;charset=utf-8');
header('Access-Control-Allow-Methods:POST');  
$localtime=date('y-m-d H:i:s',time());
$oneimgarr = array ('url'=>$oneimgurl,'time'=>$localtime);
echo json_encode($oneimgarr);
?>