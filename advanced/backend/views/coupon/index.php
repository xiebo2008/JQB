<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CouponSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '优惠券管理');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coupon-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', '创建优惠券'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', '批量创建优惠券'), ['batch-  create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'descr',
            'coupon',
            [
                'attribute'=>'created_at',
                'value'=>function($model){
                    return date('Y-m-d',$model->created_at);
                }
            ],
            [
                'attribute'=>'used_at',
                'value'=>function($model){
                    return date('Y-m-d',$model->used_at);
                }
            ],
            [
                'attribute'=>'valide_at',
                'value'=>function($model){
                    return date('Y-m-d',$model->valide_at);
                }
            ],
            [
                'attribute'=>'type',
                'value'=>function($model){
                    $type_str="";
                    switch ($model->type){
                        case 1:
                            $type_str="满减";
                            break;
                        case 2:
                            $type_str="抵现";
                            break;
                        case 3:
                            $type_str="折扣";
                            break;
                    }
                    return $type_str;
                }
            ],
            [
                'attribute'=>'status',
                'value'=>function($model){
                    $type_str="";
                    switch ($model->status){
                        case 1:
                            $type_str="有效";
                            break;
                        case 2:
                            $type_str="已使用";
                            break;
                        case 3:
                            $type_str="已过期";
                            break;
                    }
                    return $type_str;
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
