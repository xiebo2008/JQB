<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/10
 * Time: 21:48
 */
use yii\widgets\LinkPager; ?>
<script>
    selected_top_menu(4);
</script>
<div class="container" id="qyjs_title">
    <section style="padding:0;">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-left">
                <h4><a href="/site/health" style="color: #666;">企业动态</a></h4>
            </div>
        </div>
    </section>
</div>
<div class="container" id="qydt">
    <section>
        <div class="row">
            <div class="col-md-12 col-sm-12 text-left">
                <ul>
                    <?php
                    foreach ($models as $val){?>
                        <li>
                            <a href="/site/newsdetail?id=<?=$val['id']?>">
                                <span><?=$val['title']?></span>
                                <p>发布时间：<?=date("Y-m-d H:i",$val['updated_time'])?>&nbsp;&nbsp;&nbsp;&nbsp;
                                    编辑：<?=$val['author']?></p>
                                <p><?=$val['summary']?></p>
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <style>
            #pager_div ul li span {
                display: block;
                font-size: 14px;
                color: #666;
            }
            #pager_div ul li a {
                display: block;
                padding-top: 6px;
            }
        </style>
        <div class="row">
            <div  class="col-md-12 col-sm-12 text-center" style="margin-top:10px">
                <div id="pager_div">
                    <?= LinkPager::widget([
                        'pagination' => $pages,
                        /* 'firstPageLabel'=>'first',
                         'lastPageLabel'=>'last',*/
                        'prevPageLabel'=>'《',
                        'nextPageLabel'=>'》',
                        'maxButtonCount'=>5,
                    ]) ?>
                </ul>
            </div>
        </div>
    </section>
</div>
