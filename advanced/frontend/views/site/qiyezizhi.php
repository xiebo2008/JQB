<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/11
 * Time: 15:19
 */
?>
<style>
    #imgbox-loading {position: absolute;top: 0;left: 0;	cursor: pointer;display: none;z-index: 90;}
    #imgbox-loading div {background: #FFF;width: 100%;height : 100%;}
    #imgbox-overlay {position: absolute;top: 0;	left: 0;width: 100%;height: 100%;background: #000;display: none;z-index: 80;}
    .imgbox-wrap {position: absolute;top:0;left: 0;background: #FFF;display: none;	z-index: 90;overflow: hidden}
    .imgbox-img {padding: 0;margin: 0;border: none;width: 100%;	height: 100%;vertical-align: top;overflow: hidden}
    .imgbox-title {	padding-top: 10px;font-size: 11px;text-align: center;font-family: Arial;color: #333;display: none;}
    .imgbox-bg-wrap {position: absolute;padding: 0;margin: 0;display: none;overflow: hidden;}
    .imgbox-bg {position: absolute;width: 20px;	height: 20px;display: none;overflow: hidden;}
</style>
<script src="/js/jquery2.min.js"></script>
<script src="/js/jquery.imgbox.pack.js"></script>
<div class="container" id="qyjs_title">
    <section style="padding:0;">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-left">
                <h4>荣誉资质</h4>
            </div>
        </div>
    </section>
</div>
<div class="container">
    <section>
        <div class="row">

            <div class="col-md-4 col-sm-4 text-right">
                <h4>医疗器械注册证</h4>
                <a id="zizhi1" href="/images/zhucezhengjian.png"><img src="/images/zhucezhengjian.png" height="200px"></a>
            </div>
            <div class="col-md-4 col-sm-4">
                <h4>检验报告(EMC)</h4>
                <a id="zizhi2" href="/images/zizhi-1.jpg"><img src="/images/zizhi-1.jpg" height="200px"></a>
            </div>
            <div class="col-md-4 col-sm-4 text-left">
                <h4>检验报告(通用要求)</h4>
                <a id="zizhi3" href="/images/zizhi-2.jpg"><img src="/images/zizhi-2.jpg" height="200px"></a>
            </div>

        </div>
    </section>
</div>
<script>
    $(function(){
        $("#zizhi1,#zizhi2,#zizhi3").imgbox({
            'speedIn'		: 0,
            'speedOut'		: 0,
            'alignment'		: 'center',
            'overlayShow'	: true,
            'allowMultiple'	: false
        });

    });
</script>
