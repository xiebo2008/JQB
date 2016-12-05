<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/10
 * Time: 21:49
 */?>
 <style>
  .summary
  {
	margin: 10px 0 0 0;
    padding-left: 200px;
	padding-right: 200px;
    overflow: hidden;
    line-height: 26px;
    text-indent: 24px;
    color: #666;
    font-size: 14px;
    font-family: Microsoft Yahei;
  }
 </style>
<div class="container" id="qyjs_title">
    <section style="padding:0;">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-left">
                <h4><a href="index.php?r=site/health" style="color: #666;">健康百科</a></h4>
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
				<div class="summary">
				<?=$model->content?>
				</div>
               
                    
                   
               
            </div>
        </div>
    </section>
</div>

