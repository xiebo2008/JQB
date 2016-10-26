<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/11
 * Time: 10:04
 */?>
<div class="container" id="qyjs_title">
    <section style="padding:0;">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-left">
                <h4>视频欣赏</h4>
            </div>
        </div>
    </section>
</div>
<div class="container" id="sysm">
    <section>
        <div class="row">
            <div class="col-md-12 col-sm-12 text-left">
                <h5>
                    云端的心跳
                </h5>
                <div id="a1" style="margin:0 auto;"></div>
                <script type="text/javascript" src="ckplayer/ckplayer/ckplayer.js" charset="utf-8"></script>
                <script type="text/javascript">
                    var flashvars={
                        f:'http://www.wocaring.cn/mp4/yddxt.mp4',
                        c:0,
                        v:60,
                        e:5,
                        h:4,
                        wh:'3:2',
                    };
                    var params={bgcolor:'#000000',allowFullScreen:true,allowScriptAccess:'always',wmode:'transparent'};
                    var video=['http://www.wocaring.cn/mp4/yddxt.mp4->video/mp4'];
                    CKobject.embed('ckplayer/ckplayer/ckplayer.swf','a1','ckplayer_a1','720','480',true,flashvars,video,params);
                </script>
            </div>
        </div>
    </section>
</div>
