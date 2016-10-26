<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '订单列表');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Order'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'shouqian_name',
            //'shouqian_phone',
            'shouhuo_name',
            'shouhuo_phone',
            'shouhuo_dizhi',
            // 'shouhuo_menpai',
            'yuding_shangpin',
            'yuding_shuliang',
            'zongjia',
            //'yuding_time:datetime',
            [
                'attribute'=>'yuding_time',
                'value'=>function($model){
                    return date('Y-m-d H:i',$model->yuding_time);
                }
            ],
            // 'sendmail',
            'paytype',
            //'status',
            [
                'attribute'=>'status',
                'value'=>function($model){
                    $status_str='';
                    switch ($model->status){
                        case 1:
                            $status_str='待付款';
                            break;
                        case 2:
                            $status_str='已付款';
                            break;
                        case 3:
                            $status_str='付款失败';
                            break;
                    }
                    return $status_str;
                }
            ],
            // 'tradeno',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
