<?php
header("Access-Control-Allow-Origin: *");
ini_set('date.timezone','Asia/Shanghai');
error_reporting(E_ERROR);
require_once "../lib/WxPay.Api.php";
require_once 'log.php';

//初始化日志
$logHandler= new CLogFileHandler("./logs/".date('Y-m-d').'.log');
$log = Log::Init($logHandler, 15);

if(isset($_REQUEST["out_trade_no"]) && $_REQUEST["out_trade_no"] != ""){
    $out_trade_no = $_REQUEST["out_trade_no"];
    $input = new WxPayOrderQuery();
    $input->SetOut_trade_no($out_trade_no);
    $result=WxPayApi::orderQuery($input);
    //printf_info(WxPayApi::orderQuery($input));
    echo json_encode($result);
    exit();
}
?>