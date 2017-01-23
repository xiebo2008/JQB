<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="renderer" content="webkit">
    <meta name="keywords" content="武汉清易云康医疗设备有限公司 健亲宝 健亲宝云健康智能检测系统 健康医疗 智慧医疗 云健康" />
    <meta name="description" content="武汉清易云康医疗设备有限公司" />
    <meta name="generator" content="Discuz! X3.2" />
    <meta name="author" content="Discuz! Team and Comsenz UI Team" />
    <meta name="copyright" content="2001-2013 Comsenz Inc." />
    <meta name="MSSmartTagsPreventParsing" content="True" />
    <meta http-equiv="MSThemeCompatible" content="Yes" />
    <title>武汉清易云康医疗设备有限公司</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/lanrenzhijia.css">
    <link rel="shortcut icon" href="#" />
    <script src="/js/jquery.min.js" type="text/javascript"></script>
    <script src="/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/layer/layer.js" type="text/javascript"></script>
    <script src="/js/jquery.cityselect.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js" type="text/javascript"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.js" type="text/javascript"></script>
    <![endif]-->
    <script>
        var selected_top_menu=function(i){
            $(".navbar-nav .menu_li").each(function(index) {
                if(index==i) {
                    $(this).addClass("active");
                }else {
                    $(this).removeClass("active");
                }
            });
        };
    </script>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/site/index">
                <img alt="Brand" src="/images/new_logo.png" height="50">
            </a>
        </div>
        <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
                <li class="menu_li">
                    <a href="/site/index">首页</a>
                </li>
                <li class="cm-products menu_li">
                    <a href="/site/aboutus">关于我们</a>
                    <ul class="product-collapse">
                        <li>
                            <a href="/site/aboutus">企业简介</a>
                        </li>
                        <li>
                            <a href="/site/culture">企业文化</a>
                        </li>
                        <li>
                            <a href="/site/news">企业动态</a>
                        </li>
                        <li>
                            <a href="/site/video">视频欣赏</a>
                        </li>
                    </ul>
                </li>
                <li class="cm-products menu_li" >
                    <a href="/site/products">产品中心</a>
                    <ul class="product-collapse">
                        <li>
                            <a href="/site/products">产品详情</a>
                        </li>
                        <li>
                            <a href="/site/step">使用说明</a>
                        </li>
                    </ul>
                </li>
                <li class="menu_li">
                    <a href="/site/app">App下载</a>
                </li>
                <li class="cm-products menu_li">
                    <a href="/site/health">健康百科</a>
                    <ul class="product-collapse">
                        <li>
                            <a href="/site/cardiac">心脏康复</a>
                        </li>
                    </ul>
                </li>
                <li class="menu_li">
                    <a href="/site/contactus">联系我们</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- 右边漂浮窗代码 begin -->
<div class="main-im">
    <div id="open_im" class="open-im">&nbsp;</div>  
    <div class="im_main" id="im_main">
        <div id="close_im" class="close-im"><a href="javascript:void(0);" title="点击关闭">&nbsp;</a></div>
        <a href="http://wpa.qq.com/msgrd?v=3&uin=2580369804&site=qq&menu=yes" target="_blank" class="im-qq qq-a" title="在线QQ客服">
            <div class="qq-container"></div>
            <div class="qq-hover-c"><img class="img-qq" src="http://demo.lanrenzhijia.com/2015/service0119/images/qq.png"></div>
            <span> QQ在线咨询</span>
        </a>
        <div class="im-tel">
            <div>客服咨询热线</div>
            <div class="tel-num">4000-778-908</div>
           <div ><a class="tel-num" href="http://www.wocaring.cn/site/feedback">留下宝贵意见</a></div>
        </div>
        <div class="im-footer" style="position:relative">
            <div class="weixing-container">
                <div class="weixing-show">
                    <div class="weixing-txt">微信扫一扫<br>添加健亲宝</div>
                    <img class="weixing-ma" src="/images/jqbdingyuehao.jpg">
                    <div class="weixing-sanjiao"></div>
                    <div class="weixing-sanjiao-big"></div>
                </div>
            </div>
            <div class="go-top"><a href="javascript:;" title="返回顶部"></a> </div>
            <div style="clear:both"></div>
        </div>
    </div>
</div>

<script>
$(function(){
    $('#close_im').bind('click',function(){
        $('#main-im').css("height","0");
        $('#im_main').hide();
        $('#open_im').show();
    });
    $('#open_im').bind('click',function(e){
        $('#main-im').css("height","272");
        $('#im_main').show();
        $(this).hide();
    });
    $('.go-top').bind('click',function(){
        $(window).scrollTop(0);
    });
    $(".weixing-container").bind('mouseenter',function(){
        $('.weixing-show').show();
    })
    $(".weixing-container").bind('mouseleave',function(){        
        $('.weixing-show').hide();
    });
});
</script>
<!-- 右边漂浮窗 代码部分 end-->

<?=$content;?>
<div class="container" id="footer">
    <section>
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <ul>
                    <li class="footer-title" data-toggle="" data-target="#">关于产品</li>
                    <li>
                        <a href="/site/products" target="_blank">云健康仪</a>
                    </li>
                    <li>
                        <a href="/site/video" target="_blank">视频欣赏</a>
                    </li>
                    <li>
                        <a href="/site/step" target="_blank">使用说明</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-2">

                <ul>
                    <li class="footer-title" data-toggle="" data-target="#">关于我们</li>
                    <li>
                        <a href="/site/aboutus" target="_blank">公司简介</a>
                    </li>
                    <li>
                        <a href="/site/certification" target="_blank">荣誉资质</a>
                    </li>
                    <li>
                        <a href="/site/joinus" target="_blank">加入我们</a>
                    </li>
                    <li>
                        <a href="/site/contactus" target="_blank">联系我们</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3">
                <ul>
                    <li class="footer-title" data-toggle="" data-target="#">联系我们</li>
                    <li>
                        <a href="javascript:void(0)" class="no_a">邮箱:service@wocaring.cn</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="no_a">联系电话:4000-778-908</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-2">

                <ul>
                    <li class="footer-title" data-toggle="" data-target="#">用户服务</li>
                    <li>
                        <a href="/site/question" target="_blank">常见问题</a>
                    </li>
                    <li>
                        <a href="/site/feedback" target="_blank">意见建议</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-2" id="ewm_div">
                <ul>
                    <!--<li>
                        <img src="/images/userapp_qrcode.png" width="100"><br>
                        扫码下载APP
                    </li>-->
                    <li>
                        <img src="/images/jqbdingyuehao.jpg" width="100"><br>
                        关注健亲宝
                    </li>
                </ul>
            </div>
        </div>
    </section>
	<div align="center" ><a href="/images/cert.png" hidefocus="true" rel="nofollow" target="_blank">中华人民共和国互联网药品信息服务资格证书(鄂)-非经营-2016-0055</a></div>
	<br>
</div>
<script>
    var paly_video=function() {
        var video=document.getElementById("video-88-1")
        if ($('video').hasClass('pause')) {
            video.controls=true;
            $('video').trigger("play");
            $('video').removeClass('pause');
            $('video').addClass('play');
        } else if($('video').hasClass('play')) {
            video.controls=false;
            $('video').trigger("pause");
            $('video').removeClass('play');
            $('video').addClass('pause');
        }else{
            video.controls=true;
            $('video').trigger("play");
            $('video').removeClass('pause');
            $('video').addClass('play');
        }
    };
    $(function(){
        $('#carousel-example-generic').carousel({
            interval: 5000
        })
    });
    $('li.dropdown').mouseover(function() {
        $(this).addClass('open');
    }).mouseout(function() {        $(this).removeClass('open');    });

</script>
</body>
</html>