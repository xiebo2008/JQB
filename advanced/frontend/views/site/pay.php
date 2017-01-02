<?php
/**
 * Created by PhpStorm.
 * User: jasongao
 * Date: 16/6/27
 * Time: 15:28
 */?>
<div class="container" id="qyjs_title">
    <section style="padding:0;margin-left:0px;margin-right:0px;">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-left">
                <h4>产品订购</h4>
            </div>
        </div>
    </section>
</div>
<div class="container" id="order">
    <section>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="order_step" style="background:url('./images/step_bg.png') no-repeat 90% #f6f6f6;">
                    <a href="" class="first_step" style="color: #333;"><span style="background-color: #999;color: #fff;">1</span>填写订单信息</a>
                    <a href="" class="second_step" style="margin-left:0px;color: #fff;background-color: #e71b36;">
                        <span style="background-color: #fff;color: #e71b36;">2</span>确认订单</a>
                </div>
            </div>
        </div>
        <style>
            #shouhuoxinxi ul{
                padding: 0;
                margin-top: 20px;
            }
            #shouhuoxinxi .title{
                border-bottom: 1px solid #f1f1f1;
            }
            #shouhuoxinxi ul li{
                text-align: left;
                margin-bottom:12px;
                padding: 0;
            }
            #shouhuoxinxi ul li .item_name{
                color: #555555;
            }
            #shouhuoxinxi ul li .item_value{
                color: #777777;
                padding-left: 10px;
            }
        </style>
        <div class="row" id=shouhuoxinxi>
            <div class="col-md-12 col-sm-12" style="padding-left:5%;padding-right: 5%">
                <ul>
                    <li>
                        <p class="title">收货地址</p>
                    </li>
                    <li>
                        <span class="item_name">姓名:</span><span class="item_value"><?=$order->shouhuo_name?></span>
                    </li>
                    <li>
                        <span class="item_name">电话:</span><span class="item_value"><?=$order->shouhuo_phone?></span>
                    </li>
                    <li>
                        <span class="item_name">地址:</span><span class="item_value"><?=$order->shouhuo_dizhi.$order->shouhuo_menpai?></span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12" style="padding-left:5%;padding-right: 5%">
                <table style="margin-top:20px">
                    <tr>
                        <th style="border-left:none;width:300px">商品名称</th>
                      
                        <th>数量</th>
                        <th>小计（元）</th>
                    </tr>
                    <tr>
                        <td>
                            <img src="/images/jqbyiqi_new.png" width="90px" style="margin-right:10px"><span>&nbsp;健亲宝云健康智能检测系统</span>
                        </td>
                       
                        <td>
                            <div class="input-group" style="width:167px;margin:0 auto;">
                                <span><?=$order->yuding_shuliang?></span>
                            </div>
                        </td>
                        <td>
                            <span class="xiaoji"><?=$order->zongjia?></span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12" style="padding-left:5%;padding-right: 5%">
                <ul class="nav nav-tabs" style="margin-top: 20px">
                    <li role="presentation" class="active"><a href="#wechat" data-toggle="tab">微信支付</a></li>
                    <li role="presentation"><a href="#alipay" data-toggle="tab">支付宝</a></li>
                     <li role="presentation"><a href="#bankpay" data-toggle="tab">银行汇款</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="wechat">
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-4 text-center" style="margin-left: 200px">
                                <img src="/images/WePayLogo.png" style="width: 180px;float: left">
                                <img src="/images/wechat_tuijian.png" style="width: 80px;float: left">
                                <p style="text-align: center;width: 100%;float: right;padding-top:20px">
                                    您需支付&nbsp;
                                    <lable id="pay_fee"><?=$order->zongjia?></lable>&nbsp;元
                                </p>
                            </div>
                            <div class="col-md-4 text-left">
                                <img id="qr_code" alt="微信扫码支付" src="" style="width:180px;height:180px;">
                            </div>
                            <input type="hidden" id="out_trade_no_1" value="">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="alipay">
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-4 text-center" style="margin-left: 200px">
                                <img src="/alipay/img/alipay_logo.png" style="width: 160px;float: left">
                                <img src="/images/wechat_tuijian.png" style="width: 80px;float: left">
                                <p style="text-align: center;width: 100%;float: right;padding-top:20px">
                                    您需支付&nbsp;
                                    <lable id="pay_fee"><?=$order->zongjia?></lable>&nbsp;元
                                </p>
                            </div>
                            <div class="col-md-4 text-left">
                                <iframe style="width: 200px;height:200px;" frameborder="none"
                                        src="/alipay/alipayapi.php?WIDout_trade_no=QYYK<?=time()?>&WIDsubject=
                            健亲宝云健康智能检测系统标准版&WIDtotal_fee=<?=$order->zongjia.'.00'?>&WIDbody=健亲宝云健康智能检测系统标准版">

                                </iframe>
                            </div>
                            <input type="hidden" id="out_trade_no_1" value="">
                        </div>
                    </div>
                     <div class="tab-pane fade" id="bankpay">
                        <div class="row" style="margin-top: 20px;">
                       
                            <div class="col-md-4 text-left" style="margin-left: 200px">
                        公司名称：武汉清易云康医疗设备有限公司 <br>
                        开户银行：建行武汉光谷支行<br>
                        银行帐号：42001110208053013306<br>
                        <div style="color:red">汇款时请确认银行账号正确无误，汇款前后请联系客服核对汇款信息。</div> 
                        客服QQ:2834306294  &nbsp;&nbsp;客服电话4000-778-908<br>
                                <p style="text-align: center;width: 100%;float: right;padding-top:20px">
                                    您需支付&nbsp;
                                    <lable id="pay_fee"><?=$order->zongjia?></lable>&nbsp;元
                                </p>
                            </div>
                            <div class="col-md-4 text-left">
                                

                            </div>
                            <input type="hidden" id="out_trade_no_1" value="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    function query_order() {
        if($("#out_trade_no").val()!==""){
            $.post("http://www.wocaring.com/example/order_query.php",
                {"_csrf":"<?= \Yii::$app->request->getCsrfToken();?>",
                    "out_trade_no":$("#out_trade_no_1").val()},function (data) {
                    //console.log(data);
                    var result_data=$.parseJSON(data);
                    if(result_data.return_code=="SUCCESS"&&result_data.trade_state=="SUCCESS"){
                        //toastr.success("恭喜,您已经成功付费健亲宝云健康智能检测系统,祝您使用愉快.");
                        layer.msg('恭喜,您已经成功付费健亲宝云健康智能检测系统,祝您使用愉快！', {icon: 1});
                        send_mail(1,2);
                        clearInterval(query_order_fun);
                    }
                });
        }else{
            //console.log('111');
        }
    }
    var query_order_fun= setInterval(query_order,3000);
    function get_qrcode() {
        $.post("/example/native.php",{"order_body":"健亲宝云健康智能检测系统标准版",
            "order_attach":"健亲宝云健康智能检测系统标准版","order_fee":<?=$order->zongjia*100?>,"order_goods_tag":"订购费",
            "order_product_id":"QYYK","_csrf":"<?= \Yii::$app->request->getCsrfToken();?>"},function (data) {
            var result_data=$.parseJSON(data);
            $("#qr_code").attr("src","/example/qrcode.php?data="+result_data.qr_code);
            $("#out_trade_no_1").val(result_data.out_trade_no);
            //console.log(data);
            //http://pay.lightmandarin.com/example/qrcode.php?data=>urlencode
        });
    }
    $(function () {
        query_order_fun;
    });
    get_qrcode();
    function send_mail(paytype,paystatus){
        var tradeno=$("#out_trade_no_1").val();
        if(paytype==2){
            tradeno=$("#out_trade_no_2").val();
        }
        $.getJSON("/site/sendmail&paytype="+paytype+"&paystatus="+paystatus+"&id=<?=$order->id?>&tradeno="
            +tradeno);
    }
</script>
