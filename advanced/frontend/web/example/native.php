<?php
header("Access-Control-Allow-Origin: *");
ini_set('date.timezone','Asia/Shanghai');
//error_reporting(E_ERROR);

require_once "../lib/WxPay.Api.php";
require_once "WxPay.NativePay.php";
require_once 'log.php';

//模式一
/**
 * 流程：
 * 1、组装包含支付信息的url，生成二维码
 * 2、用户扫描二维码，进行支付
 * 3、确定支付之后，微信服务器会回调预先配置的回调地址，在【微信开放平台-微信支付-支付配置】中进行配置
 * 4、在接到回调通知之后，用户进行统一下单支付，并返回支付信息以完成支付（见：native_notify.php）
 * 5、支付完成之后，微信服务器会通知支付成功
 * 6、在支付成功通知中需要查单确认是否真正支付成功（见：notify.php）
 */
$notify = new NativePay();
//$url1 = $notify->GetPrePayUrl("123456789");

//模式二
/**
 * 流程：
 * 1、调用统一下单，取得code_url，生成二维码
 * 2、用户扫描二维码，进行支付
 * 3、支付完成之后，微信服务器会通知支付成功
 * 4、在支付成功通知中需要查单确认是否真正支付成功（见：notify.php）
 */
$order_body=$_POST['order_body'];
$order_attach=$_POST['order_attach'];
$order_fee=$_POST['order_fee'];
$order_goods_tag=$_POST['order_goods_tag'];
$order_product_id=$_POST['order_product_id'];
$input = new WxPayUnifiedOrder();
$input->SetBody($order_body);
$input->SetAttach($order_attach);
$out_trade_no=WxPayConfig::MCHID.date("YmdHis");
$input->SetOut_trade_no($out_trade_no);
$input->SetTotal_fee($order_fee);
$input->SetTime_start(date("YmdHis"));
$input->SetTime_expire(date("YmdHis", time() + 600));
$input->SetGoods_tag($order_goods_tag);
$input->SetNotify_url("http://www.wocaring.com/example/notify.php");
$input->SetTrade_type("NATIVE");
$input->SetProduct_id($order_product_id.time());
$result = $notify->GetPayUrl($input);
var_dump($result);die();
$url2 = $result["code_url"];
$result_arr=array('result'=>$result,'qr_code'=>urlencode($url2),'out_trade_no'=>$out_trade_no);
echo json_encode($result_arr);
//Log::DEBUG("-----GetPayUrl-----".$result['code_url']);
?>
