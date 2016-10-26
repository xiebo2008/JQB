<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/10
 * Time: 21:53
 */?>
<div class="container" id="qyjs_title">
    <section style="padding:0;">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-left">
                <h4>使用说明</h4>
            </div>
        </div>
    </section>
</div>
<div class="container" id="sysm">
    <section>
        <div class="row">
            <div class="col-md-12 col-sm-12 text-left">
                <h5>
                    操作视频
                </h5>
                <div id="a1" style="margin:0 auto;"></div>
                <script type="text/javascript" src="ckplayer/ckplayer/ckplayer.js" charset="utf-8"></script>
                <script type="text/javascript">
                    var flashvars={
                        f:'http://www.wocaring.cn/mp4/sysm.mp4',
                        c:0,
                        i:'http://www.wocaring.cn/images/jqb.jpg',
                        v:60,
                        e:5,
                        h:4,
                        wh:'3:2',
                        d:'http://www.wocaring.cn/images/jqb.jpg|',
                        u:'http://www.wocaring.cn/images/jqb.jpg|',
                        z:'http://www.wocaring.cn/images/jqb.jpg|'
                    };
                    var params={bgcolor:'#000000',allowFullScreen:true,allowScriptAccess:'always',wmode:'transparent'};
                    var video=['http://www.wocaring.cn/mp4/sysm.mp4->video/mp4'];
                    CKobject.embed('ckplayer/ckplayer/ckplayer.swf','a1','ckplayer_a1','720','480',true,flashvars,video,params);
                </script>
            </div>
        </div>
        <div class="row" style="padding-top:20px;">
            <div class="col-md-12 col-sm-12 text-left">
                <h5>
                    操作示意图
                </h5>
            </div>
            <div class="col-md-12 col-sm-12" id="step_div">
                <p>step1. 打开产品包装，扣上粘贴扣。</p>
            </div>
            <div class="col-md-12 col-sm-12" id="step_div">
                <p>step2. 连接心电导线、血氧、气插嘴、体温探头到主机接口，打开电源开关。</p>
            </div>
            <div class="col-md-12 col-sm-12" id="step_div">
                <p>step3. 紧贴皮肤连接心电导线，找准心电导线粘贴位置。</p>
                <div id="step_img_desc">
                    <div>
                        <img src="images/sysm1.jpg" width="320px"/>
                    </div>
                    <div id="step_desc">
                        <ul>
                            <li class="desc_title">心电导线在人体连接方式如下：</li>
                            <li>RA&nbsp;&nbsp;右上肢导&nbsp;&nbsp;胸骨右缘锁骨中线第一肋间</li>
                            <li>LA&nbsp;&nbsp;左上肢导&nbsp;&nbsp;胸骨左缘锁骨中线第一肋间</li>
                            <li>RL&nbsp;&nbsp;右下肢导&nbsp;&nbsp;右锁骨中线剑突水平处</li>
                            <li>LL&nbsp;&nbsp;左下肢导&nbsp;&nbsp;左锁骨中线剑突水平处</li>
                            <li>V1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;胸导&nbsp;&nbsp;&nbsp;&nbsp;胸骨左缘第四肋间</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12" id="step_div">
                <p>step4. 将测量血压的袖带捆绑在肘关节上侧1-2cm处。</p>
                <div id="step_img_desc">
                    <div>
                        <img src="images/sysm2.jpg" width="320px"/>
                    </div>
                    <div id="step_desc" style="width: 30%">
                        <p>测量时手心向上，松紧以勉强挤入一个手指为宜。<br>袖带应与被测量的手臂、心脏保持同一水平位置。<br>被测者可以选择坐位或卧位进行测量。</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12" id="step_div">
                <p>step5. 将测量血氧的脉搏血氧饱和度探头夹在手指上，首选食指，中指次之。</p>
                <div id="step_img_desc">
                    <div>
                        <img src="images/sysm3.jpg" width="320px"/>
                    </div>
                    <div id="step_desc">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12" id="step_div">
                <p>step6. 将测量体温的体温探头放在腋下或其他待测位置。</p>
                <div id="step_img_desc">
                    <div>
                        <img src="images/sysm4.jpg" width="320px"/>
                    </div>
                    <div id="step_desc">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12" id="step_div">
                <p>step7. 全部连接完毕后，打开健亲宝APP，点击“启动”。</p>

            </div>
            <div class="col-md-12 col-sm-12" id="step_div">
                <p>step8. 等待3-5分钟，直至测量数据稳定后点击“停止”，查看测量结果。</p>

            </div>
            <div class="col-md-12 col-sm-12" id="step_div">
                <p>step9. 使用完毕，取下血氧探头、摘下袖带及心电导线粘贴扣。关闭电源，拔下所有接口。</p>

            </div>
        </div>
    </section>
</div>

