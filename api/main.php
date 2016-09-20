<?php
require_once("sunn.php");
header('Access-Control-Allow-Origin:*');  
header('Access-Control-Allow-Headers:x-requested-with,content-type'); 
$onenumber= rand(1, $oneimgsun);
$oneimg=$onenumber*11+42;
$oneimg=$oneimg*$oneimg;
$oneimgurl= "https://app.haotown.cn/img/tu/$oneimg.jpg";
?>