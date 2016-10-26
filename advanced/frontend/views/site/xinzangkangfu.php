<?php
/**
 * Created by PhpStorm.
 * User: jasongao
 * Date: 16/9/21
 * Time: 09:52
 */?>
<link rel="stylesheet" href="/css/xinzangkangfu.css">
<div class="page_banner">
    <img src="/images/top_banner.jpg" alt="" class="box_img" />
    <a href="javascript:void(0);" data-toggle="modal" data-target="#modal_video" class="icon_play"><img src="/images/icon_play.png" alt="" /></a>
</div>
<div class="box">
    <div class="title_box">
        支架人生俱乐部
        <div class="title_line w1"></div>
    </div>
    <div class="box_con clearfix">
        <div class="box_left fl video_box">
            <div id="a1" style="margin:0 auto;"></div>
            <script type="text/javascript" src="/ckplayer/ckplayer/ckplayer.js" charset="utf-8"></script>
            <script type="text/javascript">
                var flashvars={
                    f:'http://www.wocaring.cn/mp4/xinzangkangfu.mp4',
                    c:0,
                    v:60,
                    e:5,
                    h:4,
                    wh:'3:2',
                };
                var params={bgcolor:'#000000',allowFullScreen:true,allowScriptAccess:'always',wmode:'transparent'};
                var video=['http://www.wocaring.cn/mp4/xinzangkangfu.mp4->video/mp4'];
                CKobject.embed('ckplayer/ckplayer/ckplayer.swf','a1','ckplayer_a1','100%','auto',true,flashvars,video,params);
            </script>
        </div>
        <div class="box_right fl content_txt">
            <p></p>
            <p></p>
            <p>“支架人生俱乐部”是以我国著名心血管专家胡大一教授为核心，</p>
            <p>融合东西方医学优势，整合多学科服务，</p>
            <p>在“五大处方”指导下，有针对性的制定个体化实施方案，为患者提供心脏康复诊疗服务。</p>
        </div>
    </div>
<!--    <div class="title_box">
        <p class="cont_txt">
            “支架人生俱乐部”是以我国著名心血管专家胡大一教授为核心，融合东西方医学优势，整合多学科服务，
            在“五大处方”指导下，有针对性的制定个体化实施方案，为患者提供心脏康复诊疗服务。
        </p>
    </div>-->
    <div class="box_con" style="padding-top: 20px">
        <div class="icon_lsit">
            <div class="icon_box">
                <img src="/images/icon1.jpg" alt="" />
                <p>患者业余医学课堂</p>
            </div>
            <div class="icon_box">
                <img src="/images/icon2.jpg" alt="" />
                <p>给患者带来美好人生</p>
            </div>
            <div class="icon_box">
                <img src="/images/icon3.jpg" alt="" />
                <p>患者看病的绿色通道</p>
            </div>
            <div class="icon_box">
                <img src="/images/icon4.jpg" alt="" />
                <p>患者温暖的家</p>
            </div>
            <div class="icon_box">
                <img src="/images/icon5.jpg" alt="" />
                <p>增进医患之间沟通及信任</p>
            </div>
        </div>
    </div>
</div>
<div class="content_box pr" style="background-color: #7badc6;">
    <img src="/images/xinzangkangfu_2.jpg" alt="" class="box_img" style="margin-top: 200px;"/>
    <div class="content_box_title title_box" style="top:5px;">
        健亲宝在心脏康复中的应用
        <div class="title_line w2"></div>
        <p style="width: 60%;line-height: 25px;font-size: 16px;color:#333;margin:0 auto;text-align: left;text-indent: 2em;">
            健亲宝智能监测仪运用于术后康复阶段。一方面患者可通过健亲宝监测仪随时测量并检测各项生命体征信息；
            另一方面，专业康复指导医生可通过云系统查看患者每次测量数据，随时掌握患者术后康复情况。
            真正的实现了让患者在家也能享受专业级医疗服务。
        </p>
    </div>
    <a href="javascript:;" data-toggle="modal" data-target="#modal_video"
       style="background-color: #f65c5c;display: block;width:20%;height:60px;
       bottom:22%;left:45%;margin-left:-45px;position: absolute;text-align: center;line-height: 60px;">
        <span style="color:#fff;font-size: 22px;">了解更多</span>
    </a>
</div>
<div class="box bg2">
    <div class="title_box">
        健亲宝在心脏康复应用中的使用方法
        <div class="title_line w3"></div>
    </div>
    <div class="box_con2 clearfix">
        <div class="box_left pages_img fl">
            <img src="/images/pages_img.png" alt="" />
        </div>
        <div class="box_right box_right2 fl">
            <table border="0" width="450" class="list_table">
                <tr>
                    <td width="30" class="icon_point">·</td>
                    <td width="50">RA</td>
                    <td width="100">右下肢导</td>
                    <td>胸骨右缘锁骨中线第一肋间</td>
                </tr>
                <tr>
                    <td class="icon_point">·</td>
                    <td>LA</td>
                    <td>左上肢导</td>
                    <td>胸骨左缘锁骨中线第一肋间</td>
                </tr>
                <tr>
                    <td class="icon_point">·</td>
                    <td>RL</td>
                    <td>右下肢导</td>
                    <td>右锁骨中线剑突水平处</td>
                </tr>
                <tr>
                    <td class="icon_point">·</td>
                    <td>LL</td>
                    <td>左下肢导</td>
                    <td>左锁骨中线剑突水平处</td>
                </tr>
                <tr>
                    <td class="icon_point">·</td>
                    <td>V5</td>
                    <td>胸导</td>
                    <td>第5肋间隙左腋前线上</td>
                </tr>
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="modal_video">
    <div class="modal-dialog">
        <div class="modal-content">
    <video class="cw-videobg-embed" id="hm-top_video-target_embed" preload="true"
           loop="" controls="controls" style="max-height:600px;width:auto;margin-left:-240px;">
        <source src="http://www.wocaring.cn/mp4/jqbxinzangkangfu.mp4">
        <!--[if LT IE  9]>
        <!--最好是配一个fash版本的,因为ie内核的部分浏览器不支持html5 video 标签 -->
        <object type="application/x-shockwave-flash" data="flashfox.swf" id="hm-top_video-target_embed_object"
                class="cw-videobg-embed">
            <param name="movie" value="flashfox.swf">
            <param name="allowFullScreen" value="true">
            <param name="wmode" value="transparent">
            <param name="flashVars" value="src=http://www.wocaring.cn/mp4/jqbxinzangkangfu.mp4">
        </object>
        <![endif]-->
    </video>
            </div>
    </div>
</div>



