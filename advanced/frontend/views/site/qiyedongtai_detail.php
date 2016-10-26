<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/10
 * Time: 21:49
 */?>
<div class="container" id="qyjs_title">
    <section style="padding:0;">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-left">
                <h4><a href="index.php?r=site/news" style="color: #666;">企业动态</a></h4>
            </div>
        </div>
    </section>
</div>
<div class="container" id="qydt_detail">
    <section>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <span><?=$model->title?></span>
                <em>发布时间：<?=date("Y-m-d H:i",$model->updated_time)?>  编辑：<?=$model->author?></em>
                <?=$model->content?>
            </div>
        </div>
    </section>
</div>

