<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/11
 * Time: 20:14
 */?>
<style>
    #order ul{
        padding-left:20px;
    }
    #order p{
        margin:8px 0 5px;
    }
    #order ul li{
        500px;
        height:45px;
        line-height: 45px;
    }
    .peijian_name_span{
        display: block;
        width: 78px;
        float: left;
        text-align: left;
    }
    .peijian_num_span{
        display: block;
        padding-left: 5px;
        width: 50px;
        float: left;
        text-align: left;
    }
    .peijian_img{
        float: left;
        width: 60px;
        height: 42px;
    }
</style>
<div class="container" id="qyjs_title">
    <section style="padding:0;">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-left">
                <h4>申请购买</h4>
            </div>
        </div>
    </section>
</div>
<div class="container" id="order">
    <section>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="order_step">
                    <a href="" class="first_step"><span>1</span>填写申请信息</a>
                    <a href="" class="second_step"><span>2</span>确认申请</a>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 text-left" style="padding-left:5%;">
                <p>请选择版本：</p>
                <div class="row" style="padding-bottom: 10px">
                    <div class="col-md-4 col-sm-4">
                        <img src="/images/jqbyiqi_new.png" width="350px" style="border: 2px solid #e71b36">
                    </div>
                    <div class="col-md-6 col-sm-6">
					     <H3>经典尊享套餐</H3>
						  <p>CFDA的认证，实时监控，精准测量</p>
                        <h4>全国统一价：<B style="color:red">¥9800</B>元</h4>
                       
                    </div>
                </div>
                <div class="row" style="padding-bottom: 10px">
                    <div class="col-md-10 col-sm-10" style="padding-top: 10px;border-top:1px solid #f2f2f2">
                        <p></p>
                        <p>请填写收货人信息:</p>

                        <style>
                            .universities_city{
                                width: 150px;
                                height: 34px;
                                padding: 6px 12px;
                                font-size: 14px;
                                line-height: 1.42857143;
                                color: #555;
                                background-color: #fff;
                                background-image: none;
                                border: 1px solid #ccc;
                                border-radius: 4px;
                            }
                            .name_phone{
                                height: 34px;
                                padding: 6px 12px;
                                font-size: 14px;
                                line-height: 1.42857143;
                                color: #555;
                                background-color: #fff;
                                background-image: none;
                                border: 1px solid #ccc;
                                border-radius: 4px;
                            }
                        </style>
                        <div class="form-group field-universities_city required">
                            <label class="col-md-2 control-label" for="universities_city">收货人姓名</label>
                            <div class="col-md-10">
                                <input type="text" id="shouhuo_name" placeholder="姓名" class="name_phone" maxlength="6">
                            </div>
                            <div class="col-md-offset-2 col-md-10"><div class="help-block"></div></div>
                            <div class="col-md-offset-2 col-md-10"></div>
                        </div>
                        <div class="form-group field-universities_city required">
                            <label class="col-md-2 control-label" for="universities_city">收货人电话</label>
                            <div class="col-md-10">
                                <input type="text" id="shouhuo_phone" placeholder="电话" class="name_phone" maxlength="11">
                            </div>
                            <div class="col-md-offset-2 col-md-10"><div class="help-block"></div></div>
                            <div class="col-md-offset-2 col-md-10"></div>
                        </div>
                        <div class="form-group field-universities_city required">
                            <label class="col-md-2 control-label" for="universities_city">选择收货地址</label>
                            <div class="col-md-10">
                                <div id="city_3">
                                    <select class="universities_city prov" id="province">
                                    </select>
                                    <select class="universities_city city" id="city">
                                    </select>
                                    <select class="universities_city dist" id="dist">
                                    </select>
                                </div>
                                <input type="hidden" id="shouhuo_dizhi" placeholder="输入您的地址" class="name_phone" style="width: 600px">
                            </div>
                            <div class="col-md-offset-2 col-md-10"><div class="help-block"></div></div>
                            <div class="col-md-offset-2 col-md-10"></div>
                        </div>
                        <div class="form-group field-universities_city required">
                            <label class="col-md-2 control-label" for="universities_city">具体街道</label>
                            <div class="col-md-10">
                                <input type="text" id="shouhuo_menpai" placeholder="街道/门牌号" class="name_phone" maxlength="30">
                            </div>
                            <div class="col-md-offset-2 col-md-10"><div class="help-block"></div></div>
                            <div class="col-md-offset-2 col-md-10"></div>
                        </div>
                        <script>
                            $("#city_3").citySelect({prov:"北京", city:"朝阳区",dist:"朝阳区"});
                        </script>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-sm-10" style="padding-top: 10px;border-top:1px solid #f2f2f2">
                        <p></p>
                        <p>请确认商品信息:</p>
                        <table>
                            <tr>
                                <th style="border-left:none;" colspan="2">商品名称</th>
                                <th>单价（元）</th>
                                <th>数量</th>
                                <th>小计（元）</th>
                            </tr>
                            <tr>
                                <td>
                                    <img src="/images/jqbyiqi_new.png" width="90px">
                                </td>
                                <td style="text-align:center">
                                    <span style="float: left;display: block">健亲宝云健康<br>智能检测系统<br>(标准版)</span>
                                </td>
                                <td>
                                    9800
                                </td>
                                <td>
                                    <div class="input-group" style="width:167px;margin:0 auto;">
                                        <span class="input-group-btn">
                                            <button class="btn shuliang" type="button" onclick="jianqu()">-</button>
                                        </span>
                                        <input type="text" class="form-control" placeholder="1" id="shuliang" value="1" style="width: 100px;text-align: center">
                                        <span class="input-group-btn">
                                            <button class="btn shuliang" type="button" onclick="jiashang()">+</button>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <span class="xiaoji">9800</span><input type="hidden" id="xiaoji" value="9800">
                                </td>
                            </tr>
                        </table>
                        <div class="zongjia">
                            <p>商品总额：<span class="zongjia_text">￥9800 元</span><a href="javascript:tijiaodingdan();">提交订单</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div id="dingdanqueren" class="dingdanqueren" style="display:none">
    <form id="dingdan_form" method="post" action="/site/submitorder">
    <ul>
        <li class="dingdanxiang"><span class="glyphicon glyphicon-home"></span>收货信息</li>
        <li>姓名：<span class="shouhuo_name"></span><input type="hidden" name="shouhuo_name" value=""></li>
        <li>手机号：<span class="shouhuo_phone"></span><input type="hidden" name="shouhuo_phone" value=""></li>
        <li>收货地址：<span class="shouhuo_dizhi"></span><input type="hidden" name="shouhuo_dizhi" value=""><input type="hidden" name="shouhuo_menpai" value=""></li>
        <li class="dingdanxiang"><span class="glyphicon glyphicon-shopping-cart"></span>商品信息</li>
        <li>商品名称：<span class="shangpin_text">健亲宝云健康智能检测系统</span><input type="hidden" name="yuding_shangpin" value="健亲宝云健康智能检测系统"></li>
        <li>商品数量：<span class="shuliang_text"></span><input type="hidden" name="yuding_shuliang" value=""></li>
        <li>应付总额：<span class="zongjia_text"></span><input type="hidden" name="zongjia" value=""></li>
    </ul>
        <input type="hidden"
               name="<?= \Yii::$app->request->csrfParam; ?>"
               value="<?= \Yii::$app->request->getCsrfToken();?>">
        <input type="submit" value="确认并提交" class="querentijiao"> <!--<a href="javascript:submit_dingdan();" class="querentijiao">确认并提交</a>-->
    </form>
   
</div>
<div id="yuding_success" class="yuding_success" style="display:none; text-align: center">
    <!--<img src="/images/yudingsuccess.png" style="margin:5px auto">-->
    <p style="margin-top:20px;margin-bottom: 20px;font-size: 16px;color:#e71b36;">申请成功!<br>请保持电话畅通，工作人员将在24小时内联系您!</p>
</div>
<script>
    function count_zongjia(){
        var zongjia=$("#shuliang").val()*9800;
        $("#xiaoji").val(zongjia);
        $(".xiaoji").html(zongjia);
        $(".zongjia_text").html('￥ '+zongjia+' 元');
        $("input[name='zongjia']").val(zongjia);
    }
    function jiashang(){
        var shuliang=parseInt($("#shuliang").val())+1;
        $("#shuliang").val(shuliang);
        $(".shuliang_text").html(shuliang);
        count_zongjia();
    }
    function jianqu(){
        var shuliang=parseInt($("#shuliang").val())-1;
        if(shuliang<1){
            shuliang=0;
        }
        $("#shuliang").val(shuliang);
        $(".shuliang_text").html(shuliang);
        count_zongjia();
    }
    function tijiaodingdan(){
        var shuliang=$("#shuliang").val();
        if(shuliang<1){
            //layer.msg('请选择要购买的数量！', {icon: 2});
            layer.msg('请选择要试用的数量！', {icon: 2});
            return;
        }
        $(".shuliang_text").html(shuliang);
        $("input[name='yuding_shuliang']").val(shuliang);
        count_zongjia();
        var shouhuo_name=$("#shouhuo_name").val();
        var shouhuo_phone=$("#shouhuo_phone").val();
        var shouhuo_dizhi=$("#province").val()+$("#city").val();
        if($("#dist").val()){
            shouhuo_dizhi=shouhuo_dizhi+$("#dist").val();
        }
        var shouhuo_menpai=$("#shouhuo_menpai").val();

        if(!shouhuo_name||!shouhuo_phone||!shouhuo_dizhi){
            //layer.msg('请填写完整购买信息！', {icon: 2});
            layer.msg('请填写完整收货信息！', {icon: 2});
            return;
        }
        reg1=/^(\d{3,4}\-)?[1-9]\d{6,7}$/;
        reg2=/^(\+\d{2,3}\-)?\d{11}$/;
        if(!(reg1.test(shouhuo_phone)||reg2.test(shouhuo_phone))){
            layer.msg('请填写正确联系电话！', {icon: 2});
            return;
        }
        $(".shouhuo_name").html(shouhuo_name);
        $("input[name='shouhuo_name']").val(shouhuo_name);
        $(".shouhuo_phone").html(shouhuo_phone);
        $("input[name='shouhuo_phone']").val(shouhuo_phone);
        $(".shouhuo_dizhi").html(shouhuo_dizhi+shouhuo_menpai);
        $("input[name='shouhuo_dizhi']").val(shouhuo_dizhi);
        $("input[name='shouhuo_menpai']").val(shouhuo_menpai);
        submit_dingdan();
        /*var dingdanqueren=$("#dingdanqueren");
        layer.open({
            type: 1,
            title:'订单确认',
            closeBtn: 1,
            shadeClose: true,
            area: ['500px', '440px'],
            content:dingdanqueren
        });*/
    }
    function submit_dingdan(){
        
       
       
        $.getJSON("/site/submitorder",{
            
            "shouhuo_name":$("input[name='shouhuo_name']").val(),
             "shouhuo_phone":$("input[name='shouhuo_phone']").val(),
            "shouhuo_dizhi":$("input[name='shouhuo_dizhi']").val(),
            "shouhuo_menpai":$("input[name='shouhuo_menpai']").val(),
            "yuding_shuliang":$("input[name='yuding_shuliang']").val(),
            "yuding_shangpin":$("input[name='yuding_shangpin']").val(),
            "zongjia": $("input[name='zongjia']").val() 
        },function(result){

            if(result.status==200){
                layer.closeAll();
                layer.open({
                    type: 1,
                    title:'申请成功',
                    closeBtn: 1,
                    shadeClose: true,
                    area: ['440px', '200px'],
                    content:$("#yuding_success")
                });
                //send_mail();
            }else{
                layer.msg('系统繁忙，请重试！', {icon: 5});
            }
        });
    }
    /*function send_mail(){
        $.getJSON("index.php?r=site/sendmail");
    }*/

</script>